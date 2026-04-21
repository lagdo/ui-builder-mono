<?php

namespace Lagdo\UiBuilder\Preline\Builder;

use Lagdo\UiBuilder\Preline\Component;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function _initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = Component\DropdownComponent::class;
        $this->dropdownItemComponentClass = Component\DropdownItemComponent::class;
        $this->dropdownMenuComponentClass = Component\DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = Component\DropdownMenuItemComponent::class;
    }
}
