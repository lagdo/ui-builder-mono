<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('w-full text-sm text-left rtl:text-right text-body');
        $this->addWrapper($this->newElement('div', [
            'class' => 'relative overflow-x-auto bg-neutral-primary-soft ' .
                'shadow-xs rounded-base border border-default',
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
