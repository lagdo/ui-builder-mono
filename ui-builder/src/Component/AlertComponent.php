<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class AlertComponent extends UiComponent
{
    use Mixin\LevelTrait;
    use Mixin\VariantTrait;

    /**
     * @var string
     */
    protected string $tagName = 'div';
}
