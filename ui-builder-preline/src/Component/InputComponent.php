<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;

class InputComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->element()->getAttribute('type') === 'hidden') {
            return;
        }

        $this->element()->addClass('py-2.5 sm:py-3 px-4 rounded-lg block ' .
            'w-full bg-layer border-layer-line sm:text-sm text-foreground ' .
            'placeholder:text-muted-foreground-1 focus:border-primary-focus ' .
            'focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none');
    }
}
