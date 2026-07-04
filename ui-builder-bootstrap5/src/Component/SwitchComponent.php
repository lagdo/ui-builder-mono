<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class SwitchComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input')->setAttribute('type', 'checkbox');
        $this->addWrapper($this->newElement('div', ['class' => 'form-check form-switch']));
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addClass('form-check-label')->addChild($text);
        $this->appendSibling($label);
    }
}
