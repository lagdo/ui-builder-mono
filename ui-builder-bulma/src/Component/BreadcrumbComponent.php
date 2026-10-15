<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('nav', [
            'class' => 'breadcrumb',
            'aria-label' => 'breadcrumbs',
        ]));
    }
}
