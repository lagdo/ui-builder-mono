<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Builder;

use Lagdo\UiBuilder\Component;

trait MenuBuilderTrait
{
    /**
     * @var string
     */
    protected string $panelMenuComponentClass = '';

    /**
     * @var string
     */
    protected string $panelMenuItemComponentClass = '';

    /**
     * @var string
     */
    protected string $breadcrumbComponentClass = '';

    /**
     * @var string
     */
    protected string $breadcrumbItemComponentClass = '';

    /**
     * @inheritDoc
     */
    public function panelMenu(...$arguments): Component\PanelMenuComponent
    {
        return $this->createComponent($this->panelMenuComponentClass, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelMenuItem(...$arguments): Component\PanelMenuItemComponent
    {
        return $this->createComponent($this->panelMenuItemComponentClass, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(...$arguments): Component\BreadcrumbComponent
    {
        return $this->createComponent($this->breadcrumbComponentClass, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(...$arguments): Component\BreadcrumbItemComponent
    {
        return $this->createComponent($this->breadcrumbItemComponentClass, $arguments);
    }
}
