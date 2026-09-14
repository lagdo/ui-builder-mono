<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\RadioGroupComponent as BaseComponent;

class RadioGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = ($this->properties['horizontal'] ?? false) ?
            'join join-horizontal' : 'join join-vertical';
        $this->addBaseClass($class);
    }
}
