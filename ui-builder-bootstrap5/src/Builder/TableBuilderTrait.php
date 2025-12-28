<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\TableComponent;

trait TableBuilderTrait
{
    /**
     * @return string
     */
    protected function _tableComponentClass(): string
    {
        return TableComponent::class;
    }
}
