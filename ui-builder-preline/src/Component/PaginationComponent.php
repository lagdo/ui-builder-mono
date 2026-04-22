<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'nav';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex items-center -space-x-px')
            ->setAttribute('aria-label', 'Pagination');
    }
}
