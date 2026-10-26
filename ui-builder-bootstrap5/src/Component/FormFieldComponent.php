<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\UiBuilder\Component\FormFieldComponent as BaseComponent;

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
        $this->addBaseClass('mb-2');
        if ($this->label === null) {
            return;
        }

        if ($this->isVertical()) {
            $this->label->addClass('form-label');
            return;
        }

        $this->element()->addClass('row');
        $this->wrapChildren($this->newElement('div', ['class' => 'col-sm-10']));
        // Must be the first child.
        $this->label->addClass('col-sm-2 col-form-label');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $this->label = $this->newElement('label', $attributes)->addChild($html);
        $this->afterBuild(fn() => $this->element()->prependChild($this->label));
    }
}
