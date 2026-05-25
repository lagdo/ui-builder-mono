<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('min-w-full divide-y divide-table-line');
        $this->addWrapper($this->newElement('div', [
            'class' => 'border border-table-line rounded-lg shadow-xs overflow-x-auto ' .
                '[&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none ' .
                '[&::-webkit-scrollbar-track]:bg-scrollbar-track ' .
                '[&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb',
        ]));
    }

    /**
     * @param bool $responsive
     *
     * @return static
     */
    public function responsive(bool $responsive = true): static
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
