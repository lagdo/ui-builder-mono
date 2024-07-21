<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\Script\JsExpr;
use Jaxon\Script\JxnCall;
use Lagdo\UiBuilder\BuilderInterface;

use function count;
use function htmlentities;
use function is_array;
use function is_string;
use function Jaxon\attr;
use function json_encode;
use function trim;

class JaxonTagBuilder
{
    public function tag(BuilderInterface $builder, string $method, array $arguments)
    {
        $this->$method($builder, ...$arguments);
    }

    /**
     * Get the component HTML code
     *
     * @param BuilderInterface $builder
     * @param JxnCall $xJsCall
     *
     * @return void
     */
    public function jxnHtml(BuilderInterface $builder, JxnCall $xJsCall)
    {
        $builder->addHtml(attr()->html($xJsCall));
    }

    /**
     * Attach a component to a DOM node
     *
     * @param BuilderInterface $builder
     * @param JxnCall $xJsCall
     * @param string $item
     *
     * @return void
     */
    public function jxnShow(BuilderInterface $builder, JxnCall $xJsCall, string $item = '')
    {
        $item = trim($item);
        $builder->setAttributes(['jxn-show', $xJsCall->_class()]);
        if($item !== '')
        {
            $builder->setAttributes(['jxn-item', $item]);
        }
    }

    /**
     * Set a node as a target for event handler definitions
     *
     * @param BuilderInterface $builder
     * @param string $name
     *
     * @return void
     */
    public function jxnTarget(BuilderInterface $builder, string $name = '')
    {
        $builder->setAttributes(['jxn-target', trim($name)]);
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
     * @param BuilderInterface $builder
     * @param string|array $on
     * @param JsExpr $xJsExpr
     * @param array $options
     *
     * @return void
     */
    public function jxnOn(BuilderInterface $builder, string|array $on, JsExpr $xJsExpr, array $options = [])
    {
        $select = '';
        $event = $on;
        if(is_array($on))
        {
            if(!$this->checkOn($on))
            {
                return $this;
            }
            $select = trim($on[0]);
            $event = $on[1];
        }
        $event = trim($event);

        if($select !== '')
        {
            $builder->setAttributes(['jxn-select', $select]);
        }
        if(isset($options['target']))
        {
            $builder->setAttributes(['jxn-event', $event]);
        }
        else
        {
            $builder->setAttributes(['jxn-on', $event]);
        }
        $builder->setAttributes(['jxn-call', htmlentities(json_encode($xJsExpr->jsonSerialize()))]);
    }

    /**
     * Set an event handler
     *
     * @param BuilderInterface $builder
     * @param JsExpr $xJsExpr
     * @param array $options
     *
     * @return void
     */
    public function jxnClick(BuilderInterface $builder, JsExpr $xJsExpr, array $options = [])
    {
        $this->jxnOn($builder, 'click', $xJsExpr, $options);
    }
}
