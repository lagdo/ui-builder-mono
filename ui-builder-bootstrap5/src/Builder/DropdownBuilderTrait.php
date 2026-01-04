<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\DropdownMenuItemComponent;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function _initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = DropdownComponent::class;
        $this->dropdownItemComponentClass = DropdownItemComponent::class;
        $this->dropdownMenuComponentClass = DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = DropdownMenuItemComponent::class;
    }
}
