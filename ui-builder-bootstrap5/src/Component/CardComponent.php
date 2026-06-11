<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\CardComponent as BaseComponent;

class CardComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('card w-100');
    }
}
