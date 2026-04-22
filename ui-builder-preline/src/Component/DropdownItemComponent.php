<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\DropdownItemComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

class DropdownItemComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('hs-dropdown-toggle py-3 px-4 inline-flex items-center ' .
                'gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line ' .
                'text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden ' .
                'focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none')
            ->setAttributes([
                'type' => 'button',
                'aria-haspopup' => 'menu',
                'aria-expanded' => 'false',
                'aria-label' => 'Dropdown',
            ]);
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        $this->addHtml('<svg class="hs-dropdown-open:rotate-180 size-4" ' .
            'xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ' .
            'fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" ' .
            'stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>');
    }
}
