<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\InputComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
use Lagdo\UiBuilder\Component\Html\Text;

use function is_a;

class InputComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('input');
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
     * @param HtmlElement $label
     * @param Text $text
     *
     * @return void
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('label')->addChild($text);
        $this->addPrevSibling($label);
    }
}
