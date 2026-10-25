<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\TableRowComponent as BaseComponent;

use function is_a;

class TableRowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), TableBodyComponent::class) &&
            $this->parentProp(2, 'hover', false)) {
            $this->element()->addClass('hover:bg-base-300');
        }
    }
}
