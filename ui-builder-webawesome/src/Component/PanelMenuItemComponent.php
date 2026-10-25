<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\PanelMenuItemComponent as BaseComponent;

class PanelMenuItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('appearance', 'outlined');
    }
}
