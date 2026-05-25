<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
use Lagdo\UiBuilder\Component\Html\Text;

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
     * @param HtmlElement $label
     * @param Text $text
     *
     * @return void
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'flex items-center']));
        $label->addChild($text)
            ->setClass('select-none ms-2 text-sm font-medium text-heading');
        $this->appendSibling($label);
    }
}
