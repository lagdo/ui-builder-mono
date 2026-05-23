<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function initPaginationBuilder(): void
    {
        $this->paginationComponentClass = Component\PaginationComponent::class;
        $this->paginationItemComponentClass = Component\PaginationItemComponent::class;
    }
}
