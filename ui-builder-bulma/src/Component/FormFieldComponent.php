<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\FormFieldComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class FormFieldComponent extends BaseComponent
{
    /**
     * @var HtmlElement|null
     */
    private HtmlElement|null $label = null;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addClass('field');
        $wrapper = $this->element();
        if ($this->isHorizontal()) {
            $wrapper = $this->newElement('div', ['class' => 'field is-horizontal']);
            $this->wrapElement($this->newElement('div', ['class' => 'field-body']))
                ->wrapElement($wrapper);
        }
        if ($this->label !== null) {
            if ($this->isHorizontal()) {
                $this->label = $this->newElement('div')
                    ->addClass('field-label')
                    ->addChild($this->label);
            }
            $wrapper->addChild($this->label);
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $this->label = $this->newElement('label', $attributes)
            ->addClass('label')
            ->addChild($html);
    }
}
