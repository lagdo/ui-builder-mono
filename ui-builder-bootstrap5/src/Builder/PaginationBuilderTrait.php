<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPaginationBuilder(): void
    {
        $this->paginationComponentClass = PaginationComponent::class;
        $this->paginationItemComponentClass = PaginationItemComponent::class;
    }
}
