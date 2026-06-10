<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TabsComponent as BaseComponent;

class TabsComponent extends BaseComponent
{
    protected function onBuild(): void
    {
        if ($this->prop('vertical', false)) {
            $this->element()->addClass('md:flex');
        }
    }
}
