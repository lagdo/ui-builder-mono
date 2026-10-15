<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class CardBodyComponent extends UiComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';
}
