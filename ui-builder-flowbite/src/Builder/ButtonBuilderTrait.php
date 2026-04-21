<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

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
