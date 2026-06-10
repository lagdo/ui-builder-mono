<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class TextareaComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('bg-neutral-secondary-medium border ' .
            'border-default-medium text-heading text-sm rounded-base focus:ring-brand ' .
            'focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('label')->addChild($text);
        $this->prependSibling($label);
    }
}
