<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class SelectComponent extends UiComponent
{
    use Mixin\ValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'select';

    /**
     * @param bool $shrink
     *
     * @return static
     */
    public function shrink(bool $shrink = true): static
    {
        $this->setProp('shrink', $shrink);
        return $this;
    }
}
