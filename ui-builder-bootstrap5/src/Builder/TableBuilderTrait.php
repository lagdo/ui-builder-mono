<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\TableComponent;

trait TableBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTableBuilder(): void
    {
        $this->tableComponentClass = TableComponent::class;
    }
}
