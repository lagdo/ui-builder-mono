<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\PanelMenuComponent as BaseComponent;

class PanelMenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = $this->isVertical() ?
            'max-w-xs w-full flex flex-col' :
            'w-full flex flex-col sm:flex-row';
        $this->element()->addClass($class);
    }
}
