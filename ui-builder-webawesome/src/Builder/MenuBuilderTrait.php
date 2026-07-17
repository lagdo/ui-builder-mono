<?php

namespace Lagdo\UiBuilder\WebAwesome\Builder;

use Lagdo\UiBuilder\WebAwesome\Component;

trait MenuBuilderTrait
{
    /**
     * @return void
     */
    protected function initMenuBuilder(): void
    {
        $this->menuComponentClass = Component\MenuComponent::class;
        $this->menuItemComponentClass = Component\MenuItemComponent::class;
        $this->breadcrumbComponentClass = Component\BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = Component\BreadcrumbItemComponent::class;
    }
}
