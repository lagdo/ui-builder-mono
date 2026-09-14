<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function initLayoutBuilder(): void
    {
        $this->alertComponentClass = Component\AlertComponent::class;
        $this->badgeComponentClass = Component\BadgeComponent::class;
    }
}
