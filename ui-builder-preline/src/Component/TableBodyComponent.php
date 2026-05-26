<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TableBodyComponent as BaseComponent;

class TableBodyComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (!$this->prop('stripe', false)) {
            $this->element()->addClass('divide-y divide-table-line');
        }
    }
}
