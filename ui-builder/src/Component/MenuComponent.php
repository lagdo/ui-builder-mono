<?php

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class MenuComponent extends UiComponent
{
    use Mixin\DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'ul';
}
