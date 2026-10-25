<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Html;

use function is_a;

class SwitchComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('form-check-input')->setAttribute('type', 'checkbox');
        $this->wrapElement($this->newElement('div', [
            'class' => 'form-check form-switch',
        ]));

        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->wrapElement($this->newElement('label', [
                'class' => 'input-group-text bg-white',
                'style' => 'padding: 4px 5px 0 9px;',
            ]));
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes);
        $label->addClass('form-check-label')->addChild($html);
        $this->appendSibling($label);
    }
}
