<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\ButtonGroupComponent as BaseComponent;

class ButtonGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('join');
    }
}
