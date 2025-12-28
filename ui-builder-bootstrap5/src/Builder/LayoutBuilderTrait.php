<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\RowComponent;

trait LayoutBuilderTrait
{
    /**
     * @return string
     */
    protected function _rowComponentClass(): string
    {
        return RowComponent::class;
    }

    /**
     * @return string
     */
    protected function _colComponentClass(): string
    {
        return ColComponent::class;
    }
}
