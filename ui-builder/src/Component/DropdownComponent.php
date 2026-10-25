<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class DropdownComponent extends UiComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';

    /**
     * @return static
     */
    public function right(): static
    {
        return $this;
    }
}
