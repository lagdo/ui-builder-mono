<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\DropdownMenuItemComponent as BaseComponent;

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
        $this->addWrapper($this->newElement('li'));
        $this->element()->setAttribute('href', '#')
            ->addClass('inline-flex items-center w-full p-2 ' .
                'hover:bg-neutral-tertiary-medium hover:text-heading rounded');
    }
}
