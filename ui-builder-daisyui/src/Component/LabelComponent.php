<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

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
            $this->addBaseClass('input-group-text');
            break;
        case $this->inForm():
            $this->addBaseClass('form-label');
            // break;
        };
    }
}
