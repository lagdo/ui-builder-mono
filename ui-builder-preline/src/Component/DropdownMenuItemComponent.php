<?php

namespace Lagdo\UiBuilder\Preline\Component;

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
        $this->element()->setAttribute('href', '#')
            ->addClass('flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm ' .
                'text-dropdown-item-foreground hover:bg-dropdown-item-hover ' .
                'focus:outline-hidden focus:bg-dropdown-item-focus');
    }
}
