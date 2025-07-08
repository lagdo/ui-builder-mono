<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\BreadcrumbElement as BaseElement;

class BreadcrumbElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->prependClass('breadcrumb');
        $this->addWrapper('nav', ['aria-label' => 'breadcrumb']);
    }
}
