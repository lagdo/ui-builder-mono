<?php

namespace Lagdo\UiBuilder\Preline\Builder;

use Lagdo\UiBuilder\Preline\Component;

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
