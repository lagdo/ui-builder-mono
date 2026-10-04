<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class TextareaComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('textarea');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Html $html): void
    {
        $label->addClass('label')->addChild($html);
        $this->prependSibling($label);
    }
}
