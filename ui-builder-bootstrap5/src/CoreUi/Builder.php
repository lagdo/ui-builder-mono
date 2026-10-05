<?php

namespace Lagdo\UiBuilder\Bootstrap5\CoreUi;

use Lagdo\UiBuilder\Bootstrap5\Builder as Bootstrap5;

class Builder extends Bootstrap5
{
    /**
     * @return void
     */
    protected function initBuilder(): void
    {
        parent::initBuilder();

        $this->dropdownButtonComponentClass = DropdownButtonComponent::class;
        $this->tabNavItemComponentClass = TabNavItemComponent::class;
    }
}
