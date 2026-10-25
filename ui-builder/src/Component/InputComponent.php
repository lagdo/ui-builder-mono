<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class InputComponent extends UiComponent
{
    use Mixin\ValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'input';
}
