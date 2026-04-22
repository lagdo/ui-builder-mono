<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\PanelComponent as BaseComponent;

class PanelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex flex-col bg-card ' .
            'border border-card-line shadow-2xs rounded-xl');
    }
}
