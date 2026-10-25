<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\Component\Attr\DirectionEnum;
use Lagdo\UiBuilder\UiComponent;

abstract class FormComponent extends UiComponent
{
    use Mixin\DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'form';

    /**
     * @return DirectionEnum
     */
    protected function defaultDirection(): DirectionEnum
    {
        return DirectionEnum::VERTICAL;
    }

    /**
     * @return static
     */
    public function validated(): static
    {
        return $this;
    }

    /**
     * @return static
     */
    public function wrapped(): static
    {
        return $this;
    }
}
