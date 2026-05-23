<?php

namespace Lagdo\UiBuilder\Flowbite\Builder;

use Lagdo\UiBuilder\Flowbite\Component;

trait CardBuilderTrait
{
    /**
     * @return void
     */
    protected function initCardBuilder(): void
    {
        $this->cardComponentClass = Component\CardComponent::class;
        $this->cardHeaderComponentClass = Component\CardHeaderComponent::class;
        $this->cardBodyComponentClass = Component\CardBodyComponent::class;
        $this->cardFooterComponentClass = Component\CardFooterComponent::class;
    }
}
