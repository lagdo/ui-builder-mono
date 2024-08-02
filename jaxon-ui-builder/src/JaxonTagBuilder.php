<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\Script\JsExpr;
use Jaxon\Script\JxnCall;
use Lagdo\UiBuilder\Html\UiBuilder;
use RuntimeException;

use function count;
use function htmlentities;
use function is_array;
use function is_string;
use function Jaxon\attr;
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
    private function jxnShow(UiBuilder $builder, JxnCall $xJsCall, string $item = '')
    {
        $item = trim($item);
        $builder->setAttribute('jxn-show', $xJsCall->_class());
        if($item !== '')
        {
            $builder->setAttribute('jxn-item', $item);
        }
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
        return count($on) === 2 && isset($on[0]) && isset($on[1])
            && is_string($on[0]) && is_string($on[1]);
    }

    /**
     * Set an event handler
     *
     * @param UiBuilder $builder
     * @param string|array $on
     * @param JsExpr $xJsExpr
     * @param array $options
     *
     * @return void
     */
    private function jxnOn(UiBuilder $builder, string|array $on, JsExpr $xJsExpr, array $options = [])
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
        $builder->setAttribute(isset($options['target']) ? 'jxn-event' : 'jxn-on', $event);
        $builder->setAttribute('jxn-call', htmlentities(json_encode($xJsExpr->jsonSerialize())), false);
    }

    /**
     * Set an event handler
     *
     * @param UiBuilder $builder
     * @param JsExpr $xJsExpr
     * @param array $options
     *
     * @return void
     */
    private function jxnClick(UiBuilder $builder, JsExpr $xJsExpr, array $options = [])
    {
        $this->jxnOn($builder, 'click', $xJsExpr, $options);
    }
}
