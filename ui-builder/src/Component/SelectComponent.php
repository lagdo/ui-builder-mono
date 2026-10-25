<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

abstract class SelectComponent extends InputComponent
{
    use Mixin\InputLabelTrait;
    use Mixin\InputValidationTrait;

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
