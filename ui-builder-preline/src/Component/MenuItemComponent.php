<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\MenuItemComponent as BaseComponent;

class MenuItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('inline-flex items-center py-3 px-4 text-sm ' .
            'font-medium bg-layer border border-layer-line text-layer-foreground ' .
            '-mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg');
    }

    /**
     * @param MenuComponent $parent
     *
     * @return void
     */
    protected function onBuild(MenuComponent $parent): void
    {
        $style = $parent->isVertical ? 'gap-x-2' :
            'gap-x-2.5 sm:-ms-px sm:mt-0 sm:first:rounded-se-none ' .
            'sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg';
        $this->element()->addClass($style);
    }
}
