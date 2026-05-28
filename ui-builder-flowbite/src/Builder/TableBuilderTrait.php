<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

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
        $this->tableHeadCellComponentClass = Component\TableHeadCellComponent::class;
        $this->tableDataCellComponentClass = Component\TableDataCellComponent::class;
    }
}
