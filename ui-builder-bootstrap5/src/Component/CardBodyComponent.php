<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\CardBodyComponent as BaseComponent;

class CardBodyComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('card-body');
    }
}
