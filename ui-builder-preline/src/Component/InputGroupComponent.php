<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent as BaseComponent;

class InputGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->wrapElement($this->newElement('div'));
        $this->element()->addClass('sm:flex rounded-lg');
    }
}
