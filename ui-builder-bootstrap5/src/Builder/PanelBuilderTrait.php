<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Component\PanelComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PanelBodyComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PanelFooterComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\PanelHeaderComponent;

trait PanelBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPanelBuilder(): void
    {
        $this->panelComponentClass = PanelComponent::class;
        $this->panelHeaderComponentClass = PanelHeaderComponent::class;
        $this->panelBodyComponentClass = PanelBodyComponent::class;
        $this->panelFooterComponentClass = PanelFooterComponent::class;
    }
}
