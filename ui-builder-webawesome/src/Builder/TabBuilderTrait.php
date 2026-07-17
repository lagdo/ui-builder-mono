<?php

namespace Lagdo\UiBuilder\WebAwesome\Builder;

use Lagdo\UiBuilder\WebAwesome\Component;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function initTabBuilder(): void
    {
        $this->tabsComponentClass = Component\TabsComponent::class;
        $this->tabNavComponentClass = Component\TabNavComponent::class;
        $this->tabNavItemComponentClass = Component\TabNavItemComponent::class;
        $this->tabContentComponentClass = Component\TabContentComponent::class;
        $this->tabContentItemComponentClass = Component\TabContentItemComponent::class;
    }
}
