<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\DropdownComponent as BaseComponent;

class DropdownComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('dropdown');
    }
}
