<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\TabNavComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabNavItemComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabContentComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TabContentItemComponent;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTabBuilder(): void
    {
        $this->tabNavComponentClass = TabNavComponent::class;
        $this->tabNavItemComponentClass = TabNavItemComponent::class;
        $this->tabContentComponentClass = TabContentComponent::class;
        $this->tabContentItemComponentClass = TabContentItemComponent::class;
    }
}
