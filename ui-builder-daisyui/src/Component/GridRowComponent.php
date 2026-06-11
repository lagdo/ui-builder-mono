<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\GridRowComponent as BaseComponent;

class GridRowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('grid grid-cols-12');
    }
}
