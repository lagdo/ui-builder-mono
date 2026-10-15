<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\BreadcrumbComponent as BaseComponent;

class BreadcrumbComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('flex items-center whitespace-nowrap');
    }
}
