<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\Component\Attr\DirectionEnum;
use Lagdo\UiBuilder\UiComponent;

abstract class PanelMenuComponent extends UiComponent
{
    use Mixin\DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return DirectionEnum
     */
    protected function defaultDirection(): DirectionEnum
    {
        return DirectionEnum::VERTICAL;
    }
}
