<?php

namespace Lagdo\UiBuilder\Preline\Builder;

use Lagdo\UiBuilder\Preline\Component;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTabBuilder(): void
    {
        $this->tabNavComponentClass = Component\TabNavComponent::class;
        $this->tabNavItemComponentClass = Component\TabNavItemComponent::class;
        $this->tabContentComponentClass = Component\TabContentComponent::class;
        $this->tabContentItemComponentClass = Component\TabContentItemComponent::class;
    }
}
