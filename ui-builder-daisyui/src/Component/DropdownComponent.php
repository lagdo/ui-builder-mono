<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\DropdownComponent as BaseComponent;

class DropdownComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('dropdown');
    }
}
