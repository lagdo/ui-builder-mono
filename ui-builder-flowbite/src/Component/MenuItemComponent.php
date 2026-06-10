<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\MenuItemComponent as BaseComponent;

class MenuItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('px-4 py-2 border-b border-default ' .
            'first:rounded-t-lg last:rounded-r-lg');
    }

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
