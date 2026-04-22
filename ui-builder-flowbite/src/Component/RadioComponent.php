<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
use Lagdo\UiBuilder\Component\Html\Text;

class RadioComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'radio')
            ->setClass('w-4 h-4 text-neutral-primary border-default-medium ' .
                'bg-neutral-secondary-medium rounded-full checked:border-brand ' .
                'focus:ring-2 focus:outline-none focus:ring-brand-subtle border ' .
                'border-default appearance-none');
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
        $this->addNextSibling($label);
    }
}
