<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination;
use Jaxon\Script\JsExpr;
use Jaxon\Script\JxnCall;
use Lagdo\UiBuilder\Html\UiBuilder;

use function count;
use function htmlentities;
use function is_array;
use function is_string;
use function Jaxon\attr;
use function Jaxon\rq;
use function json_encode;
use function trim;

class JaxonTagBuilder
{
    /**
     * @param UiBuilder $builder
     * @param string $method
     * @param array $arguments
     *
     * @return void
     */
    public function tag(UiBuilder $builder, string $method, array $arguments)
    {
        $this->$method($builder, ...$arguments);
    }

    /**
     * Get the component HTML code
     *
     * @param UiBuilder $builder
     * @param JxnCall $xJsCall
     *
     * @return void
     */
    private function jxnHtml(UiBuilder $builder, JxnCall $xJsCall)
    {
        $builder->addHtml(attr()->html($xJsCall));
    }

    /**
     * Attach a component to a DOM node
     *
     * @param UiBuilder $builder
     * @param JxnCall $xJsCall
     * @param string $item
     *
     * @return void
     */
    private function jxnBind(UiBuilder $builder, JxnCall $xJsCall, string $item = '')
    {
        $item = trim($item);
        $builder->setAttribute('jxn-bind', $xJsCall->_class());
        if($item !== '')
        {
            $builder->setAttribute('jxn-item', $item);
        }
    }

    /**
     * Attach the pagination component to a DOM node
     *
     * @param UiBuilder $builder
     * @param JxnCall $xJsCall
     *
     * @return void
     */
    private function jxnPagination(UiBuilder $builder, JxnCall $xJsCall)
    {
        $builder->setAttribute('jxn-bind', rq(Pagination::class)->_class());
        $builder->setAttribute('jxn-item', $xJsCall->_class());
    }

    /**
     * Set a node as a target for event handler definitions
     *
     * @param UiBuilder $builder
     * @param string $name
     *
     * @return void
     */
    private function jxnTarget(UiBuilder $builder, string $name = '')
    {
        $builder->setAttribute('jxn-target', trim($name));
    }

    /**
     * @param array $on
     *
     * @return bool
     */
    private function checkOn(array $on)
    {
        // Only accept arrays of 2 entries.
        $count = count($on);
        if($count !== 2)
        {
            return false;
        }

        // Only accept arrays with int index from 0, and string value.
        for($i = 0; $i < $count; $i++)
        {
            if(!isset($on[$i]) || !is_string($on[$i]))
            {
                return false;
            }
        }

        return true;
    }

    /**
     * Set an event handler
     *
     * @param UiBuilder $builder
     * @param string|array $on
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function jxnOn(UiBuilder $builder, string|array $on, JsExpr $xJsExpr)
    {
        $select = '';
        $event = $on;
        if(is_array($on))
        {
            if(!$this->checkOn($on))
            {
                return;
            }

            $select = trim($on[0]);
            $event = $on[1];
        }
        $event = trim($event);

        if($select !== '')
        {
            $builder->setAttribute('jxn-select', $select);
        }
        $builder->setAttribute('jxn-on', $event);
        $sCall = json_encode($xJsExpr->jsonSerialize());
        $builder->setAttribute('jxn-call', htmlentities($sCall), false);
    }

    /**
     * Set an event handler
     *
     * @param UiBuilder $builder
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function jxnClick(UiBuilder $builder, JsExpr $xJsExpr)
    {
        $this->jxnOn($builder, 'click', $xJsExpr);
    }

    /**
     * Set an event handler
     *
     * @param UiBuilder $builder
     * @param array $on
     * @param JsExpr $xJsExpr
     *
     * @return void
     */
    private function jxnEvent(UiBuilder $builder, array $on, JsExpr $xJsExpr)
    {
        if(!$this->checkOn($on))
        {
            return;
        }

        $builder->setAttribute('jxn-select', trim($on[0]));
        $builder->setAttribute('jxn-event', trim($on[1]));
        $sCall = json_encode($xJsExpr->jsonSerialize());
        $builder->setAttribute('jxn-call', htmlentities($sCall), false);
    }
}
