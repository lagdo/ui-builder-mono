<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'ul';
    }

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'breadcrumbs text-sm']));
    }
}
