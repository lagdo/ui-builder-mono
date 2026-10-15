<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class BadgeComponent extends UiComponent
{
    use Mixin\VisualTrait;
    use Mixin\VariantTrait;

    /**
     * @var string
     */
    protected string $tagName = 'span';

    /**
     * @return static
     */
    public function top(): static
    {
        return $this;
    }
}
