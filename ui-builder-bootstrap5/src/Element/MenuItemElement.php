<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\MenuItemElement as BaseElement;

class MenuItemElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('list-group-item list-group-item-action');
    }
}
