<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\RadioGroupComponent as BaseComponent;

class RadioGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('radios');
        $this->addStyle('flex-direction', $this->isVertical() ? 'column' : 'row');
    }
}
