<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Html;

use function is_a;

class RadioComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->element()->setAttribute('type', 'radio');
        $wrapper = $this->newElement('div')->addClass('control');
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $wrapper->addClass('is-radio');
        }
        $this->wrapElement($wrapper);
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes)->addClass('radio');
        $this->addWrapper($label)->appendSibling($html);
    }
}
