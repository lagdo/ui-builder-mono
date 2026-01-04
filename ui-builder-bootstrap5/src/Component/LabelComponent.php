<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\InputGroupComponent;
use Lagdo\UiBuilder\Component\Base\LabelComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        // Only one of these label should be added.
        switch(true) {
        case is_a($parent, InputGroupComponent::class):
            $this->element()->addBaseClass('input-group-text');
            break;
        case $this->inForm():
            $this->element()->addBaseClass('form-label');
            // break;
        };
    }
}
