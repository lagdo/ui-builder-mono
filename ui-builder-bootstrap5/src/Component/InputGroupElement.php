<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\InputGroupElement as BaseElement;

class InputGroupElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('input-group');
    }
}
