<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component;

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
