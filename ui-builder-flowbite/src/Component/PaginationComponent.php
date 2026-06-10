<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\PaginationComponent as BaseComponent;

class PaginationComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('flex -space-x-px text-sm');
        $this->addWrapper($this->newElement('nav', ['aria-label' => 'Pagination']));
    }
}
