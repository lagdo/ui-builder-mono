<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\PanelComponent as BaseComponent;

class PanelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('bg-neutral-primary-soft block ' .
            'max-w-sm p-6 border border-default rounded-base shadow-xs');
    }
}
