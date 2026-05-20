<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\InputComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
use Lagdo\UiBuilder\Component\Html\Text;

class InputComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('py-2.5 sm:py-3 px-4 rounded-lg block ' .
            'w-full bg-layer border-layer-line sm:text-sm text-foreground ' .
            'placeholder:text-muted-foreground-1 focus:border-primary-focus ' .
            'focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none');
    }

    /**
     * @param HtmlElement $label
     * @param Text $text
     *
     * @return void
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addClass('block mb-2 text-sm font-medium text-foreground')->addChild($text);
        $this->addPrevSibling($label);
    }
}
