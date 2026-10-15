<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Attr;

enum LevelEnum: string
{
    case INFO = 'info';

    case SUCCESS = 'success';

    case WARNING = 'warning';

    case DANGER = 'danger';
}
