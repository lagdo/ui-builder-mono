<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $bordered = $this->prop('border', false);

        $tableClass = $bordered ? 'min-w-full' : 'min-w-full divide-y divide-table-line';
        $this->element()->addClass($tableClass);

        $wrapperClass = $bordered ?
            'border border-table-line rounded-lg overflow-x-auto ' .
                '[&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none ' .
                '[&::-webkit-scrollbar-track]:bg-scrollbar-track ' .
                '[&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb' :
            'overflow-x-auto [&::-webkit-scrollbar]:h-2 ' .
                '[&::-webkit-scrollbar-thumb]:rounded-none ' .
                '[&::-webkit-scrollbar-track]:bg-scrollbar-track ' .
                '[&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb';
        $this->addWrapper($this->newElement('div', ['class' => $wrapperClass]));
    }
}
