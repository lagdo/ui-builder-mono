<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TabsComponent as BaseComponent;

class TabsComponent extends BaseComponent
{
    protected function onBuild(): void
    {
        if ($this->isHorizontal()) {
            $this->element()->addClass('md:flex');
        }
    }
}
