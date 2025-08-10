<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Component\Pagination;
use Jaxon\Script\JsExpr;
use Jaxon\Script\Call\JxnCall;
use Lagdo\UiBuilder\Builder\Html\Element;

use function array_filter;
use function array_map;
use function count;
use function htmlentities;
use function is_a;
use function is_string;
use function Jaxon\attr;
use function Jaxon\rq;
use function json_encode;
use function trim;

class TagBuilder
{
    /**
     * Get the component HTML code
     *
     * @param JxnCall $xJsCall
     *
     * @return string
     */
    public function html(JxnCall $xJsCall): string
    {
        return attr()->html($xJsCall);
    }

    /**
     * @param Element $element
     * @param string $method
     * @param array $arguments
     *
     * @return void
     */
    public function tag(Element $element, string $method, array $arguments)
    {
        $this->$method($element, ...$arguments);
    }

    /**
     * Attach a component to a DOM node
     *
     * @param Element $element
     * @param JxnCall $xJsCall
     * @param string $item
     *
     * @return void
     */
    private function jxnBind(Element $element, JxnCall $xJsCall, string $item = '')
    {
        $item = trim($item);
        $element->setAttribute('jxn-bind', $xJsCall->_class(), false);
        if($item !== '')
        {
            $element->setAttribute('jxn-item', $item, false);
        }
    }

    /**
     * Attach the pagination component to a DOM node
     *
     * @param Element $element
     * @param JxnCall $xJsCall
     *
     * @return void
     */
    private function jxnPagination(Element $element, JxnCall $xJsCall)
    {
        $element->setAttribute('jxn-bind', rq(Pagination::class)->_class(), false);
        $element->setAttribute('jxn-item', $xJsCall->_class(), false);
    }

    /**
     * Set an event handler
     *
     * @param Element $element
     * @param string $event
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function jxnOn(Element $element, string $event, JsExpr $xJsExpr)
    {
        $element->setAttributes([
            'jxn-on' => trim($event),
            'jxn-call' => htmlentities(json_encode($xJsExpr->jsonSerialize())),
        ], false);
    }

    /**
     * Set an event handler
     *
     * @param Element $element
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function jxnClick(Element $element, JsExpr $xJsExpr)
    {
        $this->jxnOn($element, 'click', $xJsExpr);
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
     * Filter an convert the event handlers
     *
     * @param array $events
     *
     * @return array
     */
    private function handlers(array $events): array
    {
        if (isset($events[0]) && is_string($events[0])) {
            $events = [$events];
        }

        $filterCallback = fn(array $event) => $this->eventIsValid($event);
        $convertCallback = fn(array $event) => [
            'select' => $event[0],
            'event' => trim($event[1]),
            'handler' => $event[2],
        ];
        return array_map($convertCallback, array_filter($events, $filterCallback));
    }

    /**
     * Set an event handler
     *
     * @param Element $element
     * @param array $events
     *
     * @return void
     */
    private function jxnEvent(Element $element, array $events)
    {
        $encoded = htmlentities(json_encode($this->handlers($events)));
        $element->setAttribute('jxn-event', $encoded, false);
    }
}
