<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent as BaseComponent;

class InputGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = ($this->prop('horizontal', false)) ?
            'join join-horizontal' : 'join join-vertical';
        $this->addBaseClass($class);
    }
}
