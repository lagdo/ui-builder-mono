<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class CheckboxGroupComponent extends UiComponent
{
    use Mixin\DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'div';
}
