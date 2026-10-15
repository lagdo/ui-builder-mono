<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('pagination-list');
        $this->addWrapper($this->newElement('nav', [
            'class' => 'pagination',
            'role' => 'navigation',
            'aria-label' => 'pagination',
        ]));
    }
}
