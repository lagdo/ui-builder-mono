<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('block mb-2.5 text-sm font-medium text-heading');
    }
}
