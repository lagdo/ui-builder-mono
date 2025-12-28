<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return string
     */
    protected function _paginationComponentClass(): string
    {
        return PaginationComponent::class;
    }

    /**
     * @return string
     */
    protected function _paginationItemComponentClass(): string
    {
        return PaginationItemComponent::class;
    }
}
