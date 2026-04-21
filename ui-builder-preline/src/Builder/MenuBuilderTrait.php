<?php

namespace Lagdo\UiBuilder\Preline\Builder;

use Lagdo\UiBuilder\Preline\Component;

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
