<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\InputGroupComponent as BaseComponent;

class InputGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('div'));
        $this->element()->addClass('sm:flex rounded-lg');
    }
}
