<?php

namespace Lagdo\UiBuilder\Preline\Component;

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
            ->addBaseClass('shrink-0 size-4 bg-transparent border-line-3 rounded-full shadow-2xs ' .
                'text-primary focus:ring-0 focus:ring-offset-0 checked:bg-primary-checked ' .
                'checked:border-primary-checked disabled:opacity-50 disabled:pointer-events-none');
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
            ->setClass('text-sm ms-3 text-muted-foreground-1');
        $this->appendSibling($label);
    }
}
