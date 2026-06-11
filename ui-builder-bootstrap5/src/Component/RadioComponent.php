<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

use function is_a;

class RadioComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input')
            ->setAttribute('type', 'radio');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('div', ['class' => 'input-group-text']));
            $this->element()->addClass('mt-0');
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('form-label')->addChild($text);
        $this->appendSibling($label);
    }
}
