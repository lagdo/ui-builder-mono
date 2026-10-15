<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class TableHeadCellComponent extends UiComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'th';
}
