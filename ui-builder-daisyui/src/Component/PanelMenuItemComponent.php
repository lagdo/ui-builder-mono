<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\PanelMenuItemComponent as BaseComponent;

class PanelMenuItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('menu-active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->addClass('menu-disabled');
        }
    }
}
