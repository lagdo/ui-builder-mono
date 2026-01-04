<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\RowComponent;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function _initLayoutBuilder(): void
    {
        $this->rowComponentClass = RowComponent::class;
        $this->colComponentClass = ColComponent::class;
    }
}
