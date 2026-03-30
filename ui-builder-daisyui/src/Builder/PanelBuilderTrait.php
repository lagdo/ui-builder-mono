<?php

namespace Lagdo\UiBuilder\DaisyUi\Builder;

use Lagdo\UiBuilder\DaisyUi\Component;

trait PanelBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPanelBuilder(): void
    {
        $this->panelComponentClass = Component\PanelComponent::class;
        $this->panelHeaderComponentClass = Component\PanelHeaderComponent::class;
        $this->panelBodyComponentClass = Component\PanelBodyComponent::class;
        $this->panelFooterComponentClass = Component\PanelFooterComponent::class;
    }
}
