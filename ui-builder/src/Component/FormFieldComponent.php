<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\Component\Attr\DirectionEnum;
use Lagdo\UiBuilder\UiComponent;

abstract class FormFieldComponent extends UiComponent
{
    use Mixin\DirectionTrait;
    use Mixin\LabelTrait;

    /**
     * @var string
     */
    protected string $tagName = 'div';

    /**
     * @return DirectionEnum
     */
    protected function defaultDirection(): DirectionEnum
    {
        return DirectionEnum::VERTICAL;
    }
}
