<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return static
     */
    public function vertical(): static
    {
        $this->element()->addClass('flex flex-col w-full text-sm font-medium ' .
            'text-heading bg-neutral-primary-soft border border-default rounded-base');
        return $this;
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        // Replaced flex-col with flex-row, and removed w-full.
        $this->element()->addClass('flex flex-row text-sm font-medium ' .
            'text-heading bg-neutral-primary-soft border border-default rounded-base');
        return $this;
    }
}
