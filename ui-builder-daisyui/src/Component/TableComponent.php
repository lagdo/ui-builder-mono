<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('table');
        $this->addWrapper($this->newElement('div', ['class' => 'overflow-x-auto']));
    }

    /**
     * @return static
     */
    public function stripe(): static
    {
        $this->element()->addClass('table-zebra');
        return $this;
    }

    /**
     * @return static
     */
    public function border(): static
    {
        $this->wrapper(0)?->addClass('rounded-box border border-base-content/5 bg-base-100');
        return $this;
    }
}
