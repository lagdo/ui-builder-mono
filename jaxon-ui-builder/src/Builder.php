<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\PageComponent;
use Jaxon\App\Pagination\PaginationRenderer as Renderer;
use Jaxon\Script\JsExpr;
use Jaxon\Script\Call\JxnCall;
use Lagdo\HtmlBuilder\Element\Element;
use Lagdo\HtmlBuilder\HtmlBuilder;
use Lagdo\HtmlBuilder\HtmlComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\UiBuilder\BuilderInterface;
use LogicException;

use function array_filter;
use function array_map;
use function count;
use function htmlentities;
use function is_a;
use function is_string;
use function Jaxon\attr;
use function Jaxon\jaxon;
use function json_encode;
use function trim;

class Builder
{
    /**
     * Attach a component to a DOM node
     *
     * @param HtmlElement $element
     * @param JxnCall $xJsCall
     * @param string $item
     *
     * @return void
     */
    private static function bind(HtmlElement $element, JxnCall $xJsCall, string $item = '')
    {
        $element->setAttribute('jxn-bind', $xJsCall->_class(), false);
        if(($item = trim($item)) !== '') {
            $element->setAttribute('jxn-item', $item, false);
        }
    }

    /**
     * Attach the pagination component to a DOM node
     *
     * @param HtmlElement $element
     * @param JxnCall|PageComponent $xPaginated
     *
     * @return void
     */
    private static function pagination(HtmlElement $element, JxnCall|PageComponent $xPaginated)
    {
        [$sComponent, $sItem] = attr()->paginationAttributes($xPaginated);
        $element->setAttributes([
            'jxn-bind' => $sComponent,
            'jxn-item' => $sItem,
        ], false);
    }

    /**
     * Set an event handler
     *
     * @param HtmlElement $element
     * @param string $event
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private static function on(HtmlElement $element, string $event, JsExpr $xJsExpr)
    {
        $element->setAttributes([
            'jxn-on' => trim($event),
            'jxn-call' => htmlentities(json_encode($xJsExpr->jsonSerialize())),
        ], false);
    }

    /**
     * @param array $events
     *
     * @return array
     */
    private static function handlers(array $events): array
    {
        if (isset($events[0]) && is_string($events[0])) {
            $events = [$events];
        }

        $eventIsValid = fn(array $event): bool => count($event) === 3 &&
            isset($event[0]) && isset($event[1]) && isset($event[2]) &&
            is_string($event[0]) && is_string($event[1]) &&
            is_a($event[2], JsExpr::class);
        $convertCallback = fn(array $event): array => [
            'select' => $event[0],
            'event' => trim($event[1]),
            'handler' => $event[2],
        ];
        return array_map($convertCallback, array_filter($events, $eventIsValid));
    }

    /**
     * Set multiple event handlers
     *
     * @param HtmlElement $element
     * @param array $events
     *
     * @return void
     */
    private static function event(HtmlElement $element, array $events)
    {
        $encoded = htmlentities(json_encode(self::handlers($events)));
        $element->setAttribute('jxn-event', $encoded, false);
    }

    /**
     * @param HtmlElement $element
     * @param string $tagName
     * @param array $arguments
     *
     * @return bool
     */
    private static function setAttr(HtmlElement $element, string $tagName, array $arguments): bool
    {
        switch ($tagName) {
        case 'bind':
            self::bind($element, ...$arguments);
            return true;
        case 'on':
            self::on($element, ...$arguments);
            return true;
        case 'click':
            self::on($element, 'click', ...$arguments);
            return true;
        case 'event':
            self::event($element, ...$arguments);
            return true;
        case 'pagination':
            self::pagination($element, ...$arguments);
            return true;
        }
        return false;
    }

    /**
     * @param HtmlBuilder|BuilderInterface $builder
     * @param bool $withPagination
     *
     * @return HtmlBuilder|BuilderInterface
     */
    public static function init(HtmlBuilder|BuilderInterface $builder,
        bool $withPagination = true): HtmlBuilder|BuilderInterface
    {
        // This factory adds the Jaxon jxnHtml() function to the builder interface.
        $builder->registerBuilderHelper('jxn', function(HtmlBuilder $builder,
            string $tagName, string $method, array $arguments): Element {
            if ($tagName === 'html') {
                return $builder->html(attr()->html($arguments[0]));
            }

            throw new LogicException("Call to undefined method \"{$method}()\" in the HTML UI builder.");
        });

        // This factory adds functions to set Jaxon attributes on HTML elements.
        $builder->registerElementHelper('jxn', function(HtmlElement $element,
            string $tagName, string $method, array $arguments): HtmlElement {
            if (self::setAttr($element, $tagName, $arguments)) {
                return $element;
            }

            throw new LogicException("Call to undefined method \"{$method}()\" in the HTML element.");
        });

        // This factory adds functions to set Jaxon attributes on HTML components.
        $builder->registerComponentHelper('jxn', function(HtmlComponent $component,
            string $tagName, string $method, array $arguments): HtmlComponent {
            if (self::setAttr($component->element(), $tagName, $arguments)) {
                return $component;
            }

            throw new LogicException("Call to undefined method \"{$method}()\" in the HTML component.");
        });

        // Register the pagination renderer.
        if ($withPagination && is_a($builder, BuilderInterface::class)) {
            jaxon()->di()->set(Renderer::class, fn() => new PaginationRenderer($builder));
        }

        return $builder;
    }
}
