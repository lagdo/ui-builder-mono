<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;

class TextareaComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('bg-neutral-secondary-medium border ' .
            'border-default-medium text-heading text-sm rounded-base focus:ring-brand ' .
            'focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body');
    }
}
