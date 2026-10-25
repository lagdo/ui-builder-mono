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
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox');
        $this->appendSibling($this->newElement('span', ['class' => 'check']))
            ->wrapElement($this->newElement('label', ['class' => 'b-checkbox checkbox']));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->newElement('div')->addClass('control');
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $wrapper->addClass('is-checkbox');
        }
        $this->wrapElement($wrapper);
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('span', $attributes)
            ->addClass('control-label')
            ->addChild($html);
        $this->appendSibling($label);
    }
}
