<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\ColElement;
use Lagdo\UiBuilder\Bootstrap5\Component\RowElement;
use Lagdo\UiBuilder\Component\ColInterface;
use Lagdo\UiBuilder\Component\RowInterface;

trait LayoutTrait
{
    /**
     * @inheritDoc
     */
    public function row(...$arguments): RowInterface
    {
        return $this->createElementOfClass(RowElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function col(...$arguments): ColInterface
    {
        return $this->createElementOfClass(ColElement::class, $arguments);
    }
}
