<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

use function is_a;

class SelectComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('select');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->element()->addClass('join-item');
        }
    }
}
