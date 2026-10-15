<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class CardHeaderComponent extends UiComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';
}
