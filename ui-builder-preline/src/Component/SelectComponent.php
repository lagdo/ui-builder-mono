<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

class SelectComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('py-3 px-4 pe-9 block bg-layer border-layer-line ' .
            'rounded-lg text-sm text-foreground focus:border-primary-focus ' .
            'focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none');
    }
}
