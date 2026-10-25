<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;

use function is_a;

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

        $this->addBaseClass('input');
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->element()->addClass('join-item');
        }
    }
}
