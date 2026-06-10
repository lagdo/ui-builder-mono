<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class CheckboxComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox')
            ->setClass('w-4 h-4 border border-default-medium rounded-xs ' .
                'bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'flex items-center']));
        $label->addChild($text)
            ->setClass('select-none ms-2 text-sm font-medium text-heading');
        $this->appendSibling($label);
    }
}
