<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TableRowComponent as BaseComponent;

use function get_class;

class TableRowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $parent = $this->parent();
        $parentClass = $parent !== null ? get_class($parent) : '';
        if ($parentClass === TableBodyComponent::class) {
            $this->element()->addClass('bg-neutral-primary');
            if ($this->parentProp(2, 'border', false)) {
                $this->element()->addClass('border-b border-default');
            }
            if ($this->parentProp(2, 'stripe', false)) {
                $this->element()->addClass('odd:bg-neutral-primary even:bg-neutral-secondary-soft');
            }
            if ($this->parentProp(2, 'hover', false)) {
                $this->element()->addClass('hover:bg-neutral-secondary-medium');
            }
        }
    }
}
