<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\DropdownItemComponent as BaseComponent;

class DropdownItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'div';

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn')
            ->addClass('m-1')
            ->setAttributes([
                'tabindex' => '0',
                'role' => 'button',
            ]);
    }
}
