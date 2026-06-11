<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

use function is_a;

class SelectComponent extends BaseComponent
{
    // use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('select');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->element()->addClass('join-item');
        }
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
