<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\FormComponent as BaseComponent;

class FormComponent extends BaseComponent
{
    /**
     * @return static
     */
    public function validated(): static
    {
        $this->element()->addClass('needs-validation')
            ->setAttribute('novalidate');
        return $this;
    }
}
