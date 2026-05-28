<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function initLayoutBuilder(): void
    {
        $this->rowComponentClass = Component\GridRowComponent::class;
        $this->colComponentClass = Component\GridColComponent::class;
        $this->alertComponentClass = Component\AlertComponent::class;
        $this->badgeComponentClass = Component\BadgeComponent::class;
    }
}
