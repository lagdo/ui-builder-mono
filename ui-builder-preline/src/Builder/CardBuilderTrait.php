<?php

namespace Lagdo\UiBuilder\Preline\Builder;

use Lagdo\UiBuilder\Preline\Component;

trait CardBuilderTrait
{
    /**
     * @return void
     */
    protected function initCardBuilder(): void
    {
        $this->cardComponentClass = Component\CardComponent::class;
        $this->cardImageComponentClass = Component\CardImageComponent::class;
        $this->cardHeaderComponentClass = Component\CardHeaderComponent::class;
        $this->cardBodyComponentClass = Component\CardBodyComponent::class;
        $this->cardFooterComponentClass = Component\CardFooterComponent::class;
    }
}
