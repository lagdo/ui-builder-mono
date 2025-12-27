<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\BreadcrumbElement as BaseElement;

class BreadcrumbElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('breadcrumb');
        $this->addWrapper('nav', ['aria-label' => 'breadcrumb']);
    }
}
