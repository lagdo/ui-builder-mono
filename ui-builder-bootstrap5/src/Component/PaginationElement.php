<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\PaginationElement as BaseElement;

class PaginationElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('pagination');
        $this->addWrapper('nav', ['aria-label' => '']);
    }
}
