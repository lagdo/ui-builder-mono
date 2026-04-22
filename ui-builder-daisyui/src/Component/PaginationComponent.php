<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'div';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('join');
    }
}
