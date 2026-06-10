<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class SelectComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('block px-3 py-2.5 bg-neutral-secondary-medium ' .
            'border border-default-medium text-heading text-sm rounded-base ' .
            'focus:ring-brand focus:border-brand shadow-xs placeholder:text-body');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addClass('block mb-2.5 text-sm font-medium text-heading')->addChild($text);
        $this->prependSibling($label);
    }
}
