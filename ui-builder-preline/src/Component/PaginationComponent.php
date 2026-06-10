<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'nav';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex items-center -space-x-px')
            ->setAttribute('aria-label', 'Pagination');
    }
}
