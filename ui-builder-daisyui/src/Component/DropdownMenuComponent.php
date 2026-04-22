<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('tabindex', '-1')
            ->addClass('dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm');
    }
}
