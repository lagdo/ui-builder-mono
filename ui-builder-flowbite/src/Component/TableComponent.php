<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('w-full text-sm text-left rtl:text-right text-body');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapperClass = $this->prop('border', false) ?
            'relative overflow-x-auto bg-neutral-primary-soft ' .
                'shadow-xs rounded-base border border-default' :
            'relative overflow-x-auto';
        $this->addWrapper($this->newElement('div', ['class' => $wrapperClass]));
    }
}
