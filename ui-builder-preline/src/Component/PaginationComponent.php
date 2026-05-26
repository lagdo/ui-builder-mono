<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'nav';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex items-center -space-x-px')
            ->setAttribute('aria-label', 'Pagination');
    }
}
