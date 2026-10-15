<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\DropdownComponent as BaseComponent;

class DropdownComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        // The dropdown menu shows only if hoverable. Otherwise, it requires Javascript.
        $this->addBaseClass('dropdown is-hoverable');
    }
}
