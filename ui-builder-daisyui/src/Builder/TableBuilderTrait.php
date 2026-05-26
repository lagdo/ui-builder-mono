<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait TableBuilderTrait
{
    /**
     * @return void
     */
    protected function initTableBuilder(): void
    {
        $this->tableComponentClass = Component\TableComponent::class;
        $this->tableHeadComponentClass = Component\TableHeadComponent::class;
        $this->tableBodyComponentClass = Component\TableBodyComponent::class;
        $this->tableFootComponentClass = Component\TableFootComponent::class;
        $this->tableRowComponentClass = Component\TableRowComponent::class;
        $this->tableDataComponentClass = Component\TableDataComponent::class;
    }
}
