<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
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
        $this->addBaseClass('panel is-primary');
    }
}
