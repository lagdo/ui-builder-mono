<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait MenuBuilderTrait
{
    /**
     * @return void
     */
    protected function _initMenuBuilder(): void
    {
        $this->menuComponentClass = Component\MenuComponent::class;
        $this->menuItemComponentClass = Component\MenuItemComponent::class;
        $this->breadcrumbComponentClass = Component\BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = Component\BreadcrumbItemComponent::class;
    }
}
