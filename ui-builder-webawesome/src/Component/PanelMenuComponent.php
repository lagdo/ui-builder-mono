<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\PanelMenuComponent as BaseComponent;

class PanelMenuComponent extends BaseComponent
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
