<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\DropdownItemComponent as BaseComponent;

class DropdownItemComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('inline-flex items-center justify-center text-white ' .
                'bg-brand box-border border border-transparent hover:bg-brand-strong ' .
                'focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 ' .
                'rounded-base text-sm px-4 py-2.5 focus:outline-none')
            ->setAttributes([
                'type' => 'button',
                'data-dropdown-toggle' => 'dropdown',
                'aria-expanded' => 'false',
            ]);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addHtml('<svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" ' .
            'xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" ' .
            'viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" ' .
            'stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>');
    }
}
