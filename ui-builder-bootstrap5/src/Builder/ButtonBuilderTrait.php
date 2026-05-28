<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component;

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
