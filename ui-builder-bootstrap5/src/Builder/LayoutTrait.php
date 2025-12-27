<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\RowComponent;

trait LayoutTrait
{
    /**
     * @inheritDoc
     */
    public function row(...$arguments): RowComponent
    {
        return $this->createElementOfClass(RowComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function col(...$arguments): ColComponent
    {
        return $this->createElementOfClass(ColComponent::class, $arguments);
    }
}
