<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\PanelMenuComponent as BaseComponent;

class PanelMenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = $this->isVertical() ?
            'menu menu-vertical bg-base-200 rounded-box w-56' :
            'menu menu-horizontal bg-base-200 rounded-box';
        $this->element()->addClass($class);
    }
}
