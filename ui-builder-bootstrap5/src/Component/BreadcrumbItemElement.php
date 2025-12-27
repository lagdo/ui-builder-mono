<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Html\BreadcrumbItemElement as BaseElement;

class BreadcrumbItemElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('breadcrumb-item');
    }
}
