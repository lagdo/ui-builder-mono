<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\BadgeComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\ButtonComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\ButtonGroupComponent;

trait ButtonBuilderTrait
{
    /**
     * @return void
     */
    protected function _initButtonBuilder(): void
    {
        $this->buttonComponentClass = ButtonComponent::class;
        $this->buttonGroupComponentClass = ButtonGroupComponent::class;
        $this->badgeComponentClass = BadgeComponent::class;
    }
}
