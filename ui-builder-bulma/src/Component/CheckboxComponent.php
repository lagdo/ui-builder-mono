<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Html;

use function is_a;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->element()->setAttribute('type', 'checkbox');
        $wrapper = $this->newElement('div')->addClass('control');
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $wrapper->addClass('is-checkbox');
        }
        $this->addWrapper($wrapper);
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes)->addClass('checkbox');
        $this->addWrapper($label)->appendSibling($html);
    }
}
