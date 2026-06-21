<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\PageComponent;
use Jaxon\Script\JsExpr;
use Jaxon\Script\Call\JxnCall;
use Lagdo\UiBuilder;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Html\Element\Element;
use Lagdo\UiBuilder\Html\HtmlComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Closure;
use LogicException;

use function array_filter;
use function array_map;
use function count;
use function htmlentities;
use function is_a;
use function is_string;
use function Jaxon\attr;
use function json_encode;
use function trim;

class Factory
{
    /**
     * @var BuilderInterface
     */
    private BuilderInterface $builder;

    /**
     * @var array<string, class-string<BuilderInterface>>
     */
    private $builderClasses = [
        'bootstrap3' => UiBuilder\Bootstrap3\Builder::class,
        'bootstrap4' => UiBuilder\Bootstrap4\Builder::class,
        'bootstrap5' => UiBuilder\Bootstrap5\Builder::class,
        'daisyui' => UiBuilder\DaisyUi\Builder::class,
        'flowbite' => UiBuilder\Flowbite\Builder::class,
        'preline' => UiBuilder\Preline\Builder::class,
    ];

    /**
     * @param Closure $templateGetter
     */
    public function __construct(private Closure $templateGetter)
    {}

    /**
     * Get the component HTML code
     *
     * @param JxnCall $xJsCall
     *
     * @return string
     */
    private function html(JxnCall $xJsCall): string
    {
        return attr()->html($xJsCall);
    }

    /**
     * @param HtmlElement $element
     * @param string $tagName
     * @param array $arguments
     *
     * @return bool
     */
    private function setAttr(HtmlElement $element, string $tagName, array $arguments): bool
    {
        switch ($tagName) {
        case 'bind':
            $this->bind($element, ...$arguments);
            return true;
        case 'on':
            $this->on($element, ...$arguments);
            return true;
        case 'click':
            $this->click($element, ...$arguments);
            return true;
        case 'event':
            $this->event($element, ...$arguments);
            return true;
        case 'pagination':
            $this->pagination($element, ...$arguments);
            return true;
        }
        return false;
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
    private function bind(HtmlElement $element, JxnCall $xJsCall, string $item = '')
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
    private function pagination(HtmlElement $element, JxnCall|PageComponent $xPaginated)
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
    private function on(HtmlElement $element, string $event, JsExpr $xJsExpr)
    {
        $element->setAttributes([
            'jxn-on' => trim($event),
            'jxn-call' => htmlentities(json_encode($xJsExpr->jsonSerialize())),
        ], false);
    }

    /**
     * Set a click handler
     *
     * @param HtmlElement $element
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function click(HtmlElement $element, JsExpr $xJsExpr)
    {
        $this->on($element, 'click', $xJsExpr);
    }

    /**
     * @param array $event
     *
     * @return bool
     */
    private function eventIsValid(array $event): bool
    {
        return count($event) === 3 &&
            isset($event[0]) && isset($event[1]) && isset($event[2]) &&
            is_string($event[0]) && is_string($event[1]) &&
            is_a($event[2], JsExpr::class);
    }

    /**
     * @param array $events
     *
     * @return array
     */
    private function handlers(array $events): array
    {
        if (isset($events[0]) && is_string($events[0])) {
            $events = [$events];
        }

        $filterCallback = $this->eventIsValid(...);
        $convertCallback = fn(array $event) => [
            'select' => $event[0],
            'event' => trim($event[1]),
            'handler' => $event[2],
        ];
        return array_map($convertCallback, array_filter($events, $filterCallback));
    }

    /**
     * Set multiple event handlers
     *
     * @param HtmlElement $element
     * @param array $events
     *
     * @return void
     */
    private function event(HtmlElement $element, array $events)
    {
        $encoded = htmlentities(json_encode($this->handlers($events)));
        $element->setAttribute('jxn-event', $encoded, false);
    }

    /**
     * @param string $tagName
     * @param string $method
     * @param array $arguments
     *
     * @return Element
     * @throws LogicException
     */
    private function registerBuilderHelper(string $tagName,
        string $method, array $arguments): Element
    {
        if ($method === 'jxnHtml') {
            return $this->builder->html($this->html($arguments[0]));
        }

        throw new LogicException("Call to undefined method \"{$method}()\" in the HTML UI builder.");
    }

    /**
     * @param HtmlElement $element
     * @param string $tagName
     * @param string $method
     * @param array $arguments
     *
     * @return HtmlElement
     * @throws LogicException
     */
    private function registerElementHelper(HtmlElement $element,
        string $tagName, string $method, array $arguments): HtmlElement
    {
        if ($this->setAttr($element, $tagName, $arguments)) {
            return $element;
        }

        throw new LogicException("Call to undefined method \"{$method}()\" in the HTML element.");
    }

    /**
     * @param HtmlComponent $component
     * @param string $tagName
     * @param string $method
     * @param array $arguments
     *
     * @return HtmlComponent
     * @throws LogicException
     */
    private function registerComponentHelper(HtmlComponent $component,
        string $tagName, string $method, array $arguments): HtmlComponent
    {
        if ($this->setAttr($component->element(), $tagName, $arguments)) {
            return $component;
        }

        throw new LogicException("Call to undefined method \"{$method}()\" in the HTML component.");
    }

    /**
     * @return BuilderInterface|null
     */
    public function builder(): BuilderInterface|null
    {
        $template = ($this->templateGetter)();
        if (!isset($this->builderClasses[$template])) {
            return null;
        }

        $this->builder = new ($this->builderClasses[$template])();
        // This factory adds the Jaxon jxnHtml() function to the builder interface.
        $this->builder->registerBuilderHelper('jxn', $this->registerBuilderHelper(...));
        // This factory adds functions to set Jaxon attributes on HTML elements.
        $this->builder->registerElementHelper('jxn', $this->registerElementHelper(...));
        // This factory adds functions to set Jaxon attributes on HTML components.
        $this->builder->registerComponentHelper('jxn', $this->registerComponentHelper(...));

        return $this->builder;
    }
}
