<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\FormElement as BaseElement;

class FormElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    public function horizontal(bool $horizontal = true): static
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function wrapped(bool $wrapped = true): static
    {
        return $this;
    }
}
