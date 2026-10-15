<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Attr;

enum VariantEnum: string
{
    case DEFAULT = 'default';

    case OUTLINE = 'outline';

    case LIGHT = 'light';

    case DARK = 'dark';

    case GHOST = 'ghost';
}
