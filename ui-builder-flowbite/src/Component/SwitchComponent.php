<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

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
            'class' => 'inline-flex items-center cursor-pointer',
        ]));
        $this->appendSibling($this->newElement('div', [
            'class' => "relative w-9 h-5 bg-neutral-quaternary peer-focus:outline-none " .
                "peer-focus:ring-4 peer-focus:ring-brand-soft dark:peer-focus:ring-brand-soft rounded-full " .
                "peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full " .
                "peer-checked:after:border-buffer after:content-[''] after:absolute after:top-[2px] " .
                "after:start-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 " .
                "after:transition-all peer-checked:bg-brand",
        ]));
        $this->element()->setAttribute('type', 'checkbox')
            ->setClass('sr-only peer');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $this->appendSibling($this->newElement('span', [
            'class' => 'ms-3 text-sm font-medium text-heading select-none',
        ])->addChild($text));
    }
}
