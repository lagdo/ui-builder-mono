<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

class SelectComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addWrapper($this->newElement('div')->setClass('select'))
            ->addWrapper($this->newElement('div', ['class' => 'control']));
    }
}
