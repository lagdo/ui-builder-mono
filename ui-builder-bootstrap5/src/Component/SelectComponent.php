<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class SelectComponent extends BaseComponent
{
    use Mixin\InputValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('form-select');
        if ($this->prop('shrink', false)) {
            $this->addClass('flex-grow-0 w-auto');
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Html $html): void
    {
        $label->addClass('form-label')->addChild($html);
        $this->prependSibling($label);
    }
}
