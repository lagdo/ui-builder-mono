<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TableRowComponent as BaseComponent;

class TableRowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->parentClass() === TableBodyComponent::class &&
            $this->parentProp(2, 'hover', false)) {
            $this->element()->addClass('hover:bg-base-300');
        }
    }
}
