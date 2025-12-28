<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\TabNavComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabNavItemComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabContentComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabContentItemComponent;

trait TabBuilderTrait
{
    /**
     * @return string
     */
    protected function _tabNavComponentClass(): string
    {
        return TabNavComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabNavItemComponentClass(): string
    {
        return TabNavItemComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabContentComponentClass(): string
    {
        return TabContentComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabContentItemComponentClass(): string
    {
        return TabContentItemComponent::class;
    }
}
