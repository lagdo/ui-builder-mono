<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class PanelMenuItemComponent extends UiComponent
{
    use Mixin\StateTrait;

    /**
     * @var string
     */
    protected string $tagName = 'li';
}
