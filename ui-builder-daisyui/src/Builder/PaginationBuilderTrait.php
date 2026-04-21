<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPaginationBuilder(): void
    {
        $this->paginationComponentClass = Component\PaginationComponent::class;
        $this->paginationItemComponentClass = Component\PaginationItemComponent::class;
    }
}
