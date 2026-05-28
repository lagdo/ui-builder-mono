<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('join');
    }
}
