<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Text;

class SwitchComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('label', [
            'class' => 'relative inline-block w-11 h-6 cursor-pointer',
        ]));
        $this->appendSibling($this->newElement('span', [
            'class' => 'absolute inset-0 bg-surface-1 rounded-full transition-colors ' .
                'duration-200 ease-in-out peer-checked:bg-primary-checked ' .
                'peer-disabled:opacity-50 peer-disabled:pointer-events-none',
        ]));
        $this->appendSibling($this->newElement('span', [
            'class' => 'absolute top-1/2 inset-s-0.5 -translate-y-1/2 size-5 ' .
                'bg-switch rounded-full shadow-sm transition-transform ' .
                'duration-200 ease-in-out peer-checked:translate-x-full',
        ]));
        $this->element()->setAttribute('type', 'checkbox')
            ->setClass('peer sr-only');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'flex items-center gap-x-3']));
        $label->addChild($text)
            ->setClass('text-sm text-muted-foreground-1');
        $this->appendSibling($label);
    }
}
