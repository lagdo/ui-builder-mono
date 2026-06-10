<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\CardImageComponent as BaseComponent;

class CardImageComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('rounded-t-base');
        $this->addWrapper($this->newElement('a', ['href' => '#']));
    }
}
