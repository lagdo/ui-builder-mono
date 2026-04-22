<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('div', ['class' => 'breadcrumbs text-sm']));
    }
}
