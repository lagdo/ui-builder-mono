<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;

class SwitchComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox');
        $this->wrapElement($this->newElement('label', [
            'class' => 'switch is-rounded is-small',
        ]));
        $this->appendSibling($this->newElement('span', ['class' => 'check']));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->newElement('div', ['class' => 'control']);
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $wrapper->addClass('is-switch');
        }
        $this->wrapElement($wrapper);
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('span', [
            'class' => 'control-label',
            'style' => 'font-size: 1rem', // Don't change the font size.
        ]);
        $this->appendSibling($label->addChild($html));
    }
}
