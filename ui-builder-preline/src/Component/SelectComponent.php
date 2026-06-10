<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class SelectComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('py-3 px-4 pe-9 block bg-layer border-layer-line ' .
            'rounded-lg text-sm text-foreground focus:border-primary-focus ' .
            'focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'flex items-center']));
        $label->addChild($text)
            ->setClass('text-sm ms-3 text-muted-foreground-1');
        $this->appendSibling($label);
    }
}
