<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('inline-flex items-center space-x-1 md:space-x-2');
        $this->addWrapper($this->newElement('nav', ['class' => 'flex', 'aria-label' => 'Breadcrumb']));
    }
}
