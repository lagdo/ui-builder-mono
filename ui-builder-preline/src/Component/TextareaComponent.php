<?php

namespace Lagdo\UiBuilder\Preline\Component;

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
        $this->element()->addClass('p-3 sm:p-4 pb-12 sm:pb-12 block w-full ' .
            'bg-layer border-layer-line rounded-lg sm:text-sm text-foreground ' .
            'placeholder:text-muted-foreground-1 focus:border-primary-focus ' .
            'focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none ' .
            '[&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-none ' .
            '[&::-webkit-scrollbar-track]:bg-scrollbar-track ' .
            '[&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb');
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
