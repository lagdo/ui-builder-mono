<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait TableBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTableBuilder(): void
    {
        $this->tableComponentClass = Component\TableComponent::class;
    }
}
