<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // Only one of these label should be added.
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addBaseClass('input-group-text');
            return;
        }

        $this->addBaseClass('form-label');
    }
}
