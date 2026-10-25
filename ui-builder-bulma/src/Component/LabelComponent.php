<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->wrapElement($this->newElement('p', ['class' => 'control']));
            $this->element()->setTag('a')->addClass('button is-static');
            return;
        }

        $this->addBaseClass('label');
    }
}
