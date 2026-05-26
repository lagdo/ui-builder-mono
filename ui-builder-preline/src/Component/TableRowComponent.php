<?php

namespace Lagdo\UiBuilder\Preline\Component;

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
            if ($this->parentProp(2, 'stripe', false)) {
                $this->element()->addClass('odd:bg-layer even:bg-surface');
            }
            if ($this->parentProp(2, 'hover', false)) {
                $this->element()->addClass('hover:bg-muted-hover');
            }
        }
    }
}
