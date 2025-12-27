<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PaginationItemComponent;

trait PaginationTrait
{
    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): PaginationComponent
    {
        return $this->createElementOfClass(PaginationComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): PaginationItemComponent
    {
        return $this->createElementOfClass(PaginationItemComponent::class, $arguments);
    }
}
