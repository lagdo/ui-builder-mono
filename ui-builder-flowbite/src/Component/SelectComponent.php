<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

class SelectComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('block px-3 py-2.5 bg-neutral-secondary-medium ' .
            'border border-default-medium text-heading text-sm rounded-base ' .
            'focus:ring-brand focus:border-brand shadow-xs placeholder:text-body');
    }
}
