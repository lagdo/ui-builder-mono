<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-button-group';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('orientation', 'vertical');
    }
}
