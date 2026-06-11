<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\TabContentComponent as BaseComponent;

class TabContentComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('mt-3');
    }
}
