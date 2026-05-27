<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = $this->prop('vertical', true) ?
            'max-w-xs w-full flex flex-col' :
            'w-full flex flex-col sm:flex-row';
        $this->element()->addClass($class);
    }
}
