<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = $this->prop('vertical', true) ?
            'menu menu-vertical bg-base-200 rounded-box w-56' :
            'menu menu-horizontal bg-base-200 rounded-box';
        $this->element()->addClass($class);
    }
}
