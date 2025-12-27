<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\MenuElement as BaseElement;

class MenuElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('list-group');
    }
}
