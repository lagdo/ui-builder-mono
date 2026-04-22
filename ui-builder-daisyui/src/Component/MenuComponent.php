<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return static
     */
    public function vertical(): static
    {
        $this->element()->addBaseClass('menu menu-vertical bg-base-200 rounded-box w-56');
        return $this;
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        $this->element()->addClass('menu menu-horizontal bg-base-200 rounded-box');
        return $this;
    }
}
