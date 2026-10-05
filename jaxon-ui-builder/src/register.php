<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\PageComponent;
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

/**
 * @return void
 */
function uiRegister(): void
{
    $di = jaxon()->di();
    // Register the pagination renderer.
    $di->set(PaginationRenderer::class, fn() =>
        new PaginationRenderer($di->g(BuilderInterface::class)));
}

/**
 * Attach a component to a DOM node
 *
 * @param HtmlElement $element
 * @param JxnCall $xJsCall
 * @param string $item
 *
 * @return void
 */
function bind(HtmlElement $element, JxnCall $xJsCall, string $item = '')
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
function pagination(HtmlElement $element, JxnCall|PageComponent $xPaginated)
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
function on(HtmlElement $element, string $event, JsExpr $xJsExpr)
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
function handlers(array $events): array
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
function event(HtmlElement $element, array $events)
{
    $encoded = htmlentities(json_encode(handlers($events)));
    $element->setAttribute('jxn-event', $encoded, false);
}

/**
 * @param HtmlElement $element
 * @param string $tagName
 * @param array $arguments
 *
 * @return bool
 */
function setAttr(HtmlElement $element, string $tagName, array $arguments): bool
{
    switch ($tagName) {
    case 'bind':
        bind($element, ...$arguments);
        return true;
    case 'on':
        on($element, ...$arguments);
        return true;
    case 'click':
        on($element, 'click', ...$arguments);
        return true;
    case 'event':
        event($element, ...$arguments);
        return true;
    case 'pagination':
        pagination($element, ...$arguments);
        return true;
    }
    return false;
}

/**
 * @template Builder of HtmlBuilder
 * @param Builder $builder
 *
 * @return Builder
 */
function initUiBuilder(HtmlBuilder $builder): mixed
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
        if (setAttr($element, $tagName, $arguments)) {
            return $element;
        }

        throw new LogicException("Call to undefined method \"{$method}()\" in the HTML element.");
    });

    // This factory adds functions to set Jaxon attributes on HTML components.
    $builder->registerComponentHelper('jxn', function(HtmlComponent $component,
        string $tagName, string $method, array $arguments): HtmlComponent {
        if (setAttr($component->element(), $tagName, $arguments)) {
            return $component;
        }

        throw new LogicException("Call to undefined method \"{$method}()\" in the HTML component.");
    });

    return $builder;
}
