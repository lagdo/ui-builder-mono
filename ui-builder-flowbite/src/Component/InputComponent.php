<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

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

        $this->element()->addClass('bg-neutral-secondary-medium border ' .
            'border-default-medium text-heading text-sm rounded-base focus:ring-brand ' .
            'focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body');
    }
}
