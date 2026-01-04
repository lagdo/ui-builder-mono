<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\BreadcrumbComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\BreadcrumbItemComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\MenuComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\MenuItemComponent;

trait MenuBuilderTrait
{
    /**
     * @return void
     */
    protected function _initMenuBuilder(): void
    {
        $this->menuComponentClass = MenuComponent::class;
        $this->menuItemComponentClass = MenuItemComponent::class;
        $this->breadcrumbComponentClass = BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = BreadcrumbItemComponent::class;
    }
}
