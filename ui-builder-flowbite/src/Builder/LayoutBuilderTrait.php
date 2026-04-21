<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function _initLayoutBuilder(): void
    {
        $this->rowComponentClass = Component\RowComponent::class;
        $this->colComponentClass = Component\ColComponent::class;
    }
}
