<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\CheckboxGroupComponent as BaseComponent;

class CheckboxGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('checkboxes');
        $this->setStyle('flex-direction: ' . ($this->isVertical() ? 'column;' : 'row;'));
    }
}
