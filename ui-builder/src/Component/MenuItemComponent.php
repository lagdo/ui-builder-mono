<?php

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class MenuItemComponent extends UiComponent
{
    use Mixin\StateTrait;

    /**
     * @var string
     */
    protected string $tagName = 'li';
}
