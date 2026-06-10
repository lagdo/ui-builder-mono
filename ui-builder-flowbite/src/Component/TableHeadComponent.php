<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TableHeadComponent as BaseComponent;

class TableHeadComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = match(true) {
            $this->parentProp(1, 'border', false) =>
                'text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default',
            $this->parentProp(1, 'stripe', false) =>
                'bg-neutral-secondary-soft border-b border-default',
            $this->parentProp(1, 'hover', false) =>
                'text-sm text-body bg-neutral-secondary-medium border-b border-default-medium',
            default => 'text-sm text-heading',
        };
        $this->element()->addClass($class);
    }
}
