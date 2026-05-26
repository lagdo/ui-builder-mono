<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('table');
        $this->addWrapper($this->newElement('div', [
            'class' => 'overflow-x-auto rounded-box border border-base-content/5 bg-base-100',
        ]));
    }

    /**
     * @return static
     */
    public function responsive(): static
    {
        return $this;
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function skin(string $style): static
    {
        return $this;
    }
}
