<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait ButtonBuilderTrait
{
    /**
     * @return void
     */
    protected function _initButtonBuilder(): void
    {
        $this->buttonComponentClass = Component\ButtonComponent::class;
        $this->buttonGroupComponentClass = Component\ButtonGroupComponent::class;
        $this->badgeComponentClass = Component\BadgeComponent::class;
    }
}
