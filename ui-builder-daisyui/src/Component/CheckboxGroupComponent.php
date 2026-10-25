<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\CheckboxGroupComponent as BaseComponent;

class CheckboxGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = ($this->isVertical()) ?
            'join join-horizontal' : 'join join-vertical';
        $this->addBaseClass($class);
    }
}
