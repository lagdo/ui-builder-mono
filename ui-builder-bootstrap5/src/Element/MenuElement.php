<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\MenuElement as BaseElement;

class MenuElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('list-group');
    }
}
