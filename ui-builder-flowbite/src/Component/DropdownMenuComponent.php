<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        // Todo: set the id on this element.
        $wrapper = $this->newElement('div')->addClass('z-10 hidden bg-neutral-primary-medium ' .
            'border border-default-medium rounded-base shadow-lg w-44');
        $this->addWrapper($wrapper);
        $this->element()->addClass('p-2 text-sm text-body font-medium');
        // Todo: set this automatically.
        // $this->element()->setAttribute('aria-labelledby', 'dropdownDefaultButton');
    }
}
