<?php

namespace Lagdo\UiBuilder\WebAwesome\Builder;

use Lagdo\UiBuilder\WebAwesome\Component;

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
