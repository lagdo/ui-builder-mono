<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\InputGroupComponent;
use Lagdo\UiBuilder\Component\Base\LabelComponent as BaseComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // Only one of these label should be added.
        switch(true) {
        case is_a($this->parent(), InputGroupComponent::class):
            $this->element()->addBaseClass('input-group-text');
            break;
        case $this->inForm():
            $this->element()->addBaseClass('form-label');
            // break;
        };
    }
}
