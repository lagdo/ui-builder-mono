<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\DropdownMenuElement as BaseElement;

class DropdownMenuElement extends BaseElement
{
    /**
     * @var string
     */
    public static string $tag = 'div';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('dropdown-menu');
    }
}
