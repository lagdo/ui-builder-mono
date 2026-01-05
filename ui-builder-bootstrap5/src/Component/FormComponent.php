<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\FormComponent as BaseComponent;

class FormComponent extends BaseComponent
{
    /**
     * @return static
     */
    public function validated(bool $validated): static
    {
        if ($validated) {
            $this->element()->addClass('needs-validation');
            $this->element()->setAttribute('novalidate');
            return $this;
        }

        $this->element()->removeClass('needs-validation');
        $this->element()->removeAttribute('novalidate');
        return $this;
    }

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
