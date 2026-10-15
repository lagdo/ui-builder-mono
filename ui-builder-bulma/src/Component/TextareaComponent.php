<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;

class TextareaComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('textarea')
            ->addWrapper($this->newElement('div', ['class' => 'control']));
    }
}
