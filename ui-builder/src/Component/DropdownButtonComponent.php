<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class DropdownButtonComponent extends UiComponent
{
    use Mixin\VisualTrait;

    /**
     * @var string
     */
    protected string $tagName = 'button';
}
