<?php

namespace Lagdo\UiBuilder\Bootstrap5\CoreUi;

use Lagdo\UiBuilder\Bootstrap5\Component\DropdownButtonComponent as BaseComponent;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn')
            ->addClass('dropdown-toggle')
            ->setAttributes([
                'type' => 'button',
                'data-coreui-toggle' => 'dropdown',
                'aria-expanded' => 'false',
            ]);
    }
}
