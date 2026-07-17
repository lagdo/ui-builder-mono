<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\MenuItemComponent as BaseComponent;

class MenuItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('appearance', 'outlined');
    }
}
