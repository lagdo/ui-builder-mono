<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class InputGroupComponent extends UiComponent
{
    use Mixin\ValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'div';
}
