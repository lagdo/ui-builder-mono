<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'div';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $wrapper = $this->newElement('div')
            ->addClass('hs-dropdown-menu transition-[opacity,margin] duration ' .
                'hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-dropdown ' .
                'border border-dropdown-line shadow-md rounded-lg mt-2 after:h-4 ' .
                'after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 ' .
                'before:absolute before:-top-4 before:start-0 before:w-full')
            ->setAttributes([
                'role' => 'menu',
                'aria-orientation' => 'vertical',
                // Todo: set this to the dropdown button id.
                // 'aria-labelledby' => 'hs-dropdown-default',
            ]);
        $this->addWrapper($wrapper);
        $this->element()->addClass('p-1 space-y-0.5');
    }
}
