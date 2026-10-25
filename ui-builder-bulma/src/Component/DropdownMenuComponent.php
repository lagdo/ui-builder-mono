<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
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
        $this->addBaseClass('dropdown-content')
            ->wrapElement($this->newElement('div', [
                'id' => 'dropdown-menu',
                'class' => 'dropdown-menu',
                'role' => 'menu',
            ]));
    }
}
