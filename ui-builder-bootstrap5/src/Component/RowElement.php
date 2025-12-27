<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\RowElement as BaseElement;

class RowElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('row');
    }
}
