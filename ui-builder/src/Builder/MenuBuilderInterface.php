<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Builder;

use Lagdo\UiBuilder\Component;

interface MenuBuilderInterface
{
    /**
     * @return Component\PanelMenuComponent
     */
    public function panelMenu(...$arguments): Component\PanelMenuComponent;

    /**
     * @return Component\PanelMenuItemComponent
     */
    public function panelMenuItem(...$arguments): Component\PanelMenuItemComponent;

    /**
     * @return Component\BreadcrumbComponent
     */
    public function breadcrumb(...$arguments): Component\BreadcrumbComponent;

    /**
     * @return Component\BreadcrumbItemComponent
     */
    public function breadcrumbItem(...$arguments): Component\BreadcrumbItemComponent;
}
