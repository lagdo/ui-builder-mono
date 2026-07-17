<?php

namespace Lagdo\UiBuilder\WebAwesome\Builder;

use Lagdo\UiBuilder\WebAwesome\Component;

trait ButtonBuilderTrait
{
    /**
     * @return void
     */
    protected function initButtonBuilder(): void
    {
        $this->buttonComponentClass = Component\ButtonComponent::class;
        $this->buttonGroupComponentClass = Component\ButtonGroupComponent::class;
    }
}
