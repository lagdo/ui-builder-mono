<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

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
