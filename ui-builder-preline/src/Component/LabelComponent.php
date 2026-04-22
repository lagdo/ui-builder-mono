<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\LabelComponent as BaseComponent;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('block mb-2 text-sm font-medium text-foreground');
    }
}
