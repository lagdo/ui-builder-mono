<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuItemComponent as BaseComponent;

class DropdownMenuItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('dropdown-item')
            ->setAttribute('href', '#');
        $this->addWrapper($this->newElement('li'));
    }
}
