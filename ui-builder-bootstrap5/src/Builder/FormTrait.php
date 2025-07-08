<?php

namespace Lagdo\UiBuilder\Bootstrap5\Builder;

use Lagdo\UiBuilder\Bootstrap5\Element\CheckboxElement;
use Lagdo\UiBuilder\Bootstrap5\Element\FormElement;
use Lagdo\UiBuilder\Bootstrap5\Element\InputGroupElement;
use Lagdo\UiBuilder\Bootstrap5\Element\OptionElement;
use Lagdo\UiBuilder\Bootstrap5\Element\RadioElement;
use Lagdo\UiBuilder\Element\CheckboxInterface;
use Lagdo\UiBuilder\Element\ElementInterface;
use Lagdo\UiBuilder\Element\FormInterface;
use Lagdo\UiBuilder\Element\InputGroupInterface;
use Lagdo\UiBuilder\Element\OptionInterface;
use Lagdo\UiBuilder\Element\RadioInterface;

trait FormTrait
{
    /**
     * @inheritDoc
     */
    public function form(...$arguments): FormInterface
    {
        return $this->createElementOfClass(FormElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function inputGroup(...$arguments): InputGroupInterface
    {
        return $this->createElementOfClass(InputGroupElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function checkbox(...$arguments): CheckboxInterface
    {
        return $this->createElementOfClass(CheckboxElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function radio(...$arguments): RadioInterface
    {
        return $this->createElementOfClass(RadioElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function option(...$arguments): OptionInterface
    {
        return $this->createElementOfClass(OptionElement::class, $arguments);
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return ElementInterface
     */
    protected function createFormElement(string $tagName, $arguments): ElementInterface
    {
        $element = $this->builder->createElement($tagName, $arguments);
        $element->prependClass($tagName === 'label' || $tagName === 'select' ?
            "form-$tagName" : 'form-control');
        return $element;
    }
}
