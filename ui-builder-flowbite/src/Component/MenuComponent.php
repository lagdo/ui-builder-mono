<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = $this->prop('vertical', true) ?
            'flex flex-col w-full text-sm font-medium text-heading ' .
                'bg-neutral-primary-soft border border-default rounded-base' :
            // Replaced flex-col with flex-row, and removed w-full.
            'flex flex-row text-sm font-medium text-heading ' .
                'bg-neutral-primary-soft border border-default rounded-base';
        $this->element()->addClass($class);
    }
}
