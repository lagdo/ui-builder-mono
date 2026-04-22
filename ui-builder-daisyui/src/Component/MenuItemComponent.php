<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\MenuItemComponent as BaseComponent;

class MenuItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected static string $activeClass = 'menu-active';

    /**
     * @var string
     */
    protected static string $disabledClass = 'menu-disabled';
}
