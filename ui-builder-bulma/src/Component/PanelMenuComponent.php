<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\PanelMenuComponent as BaseComponent;

class PanelMenuComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'nav';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('panel is-menu is-primary');
        if ($this->isHorizontal()) {
            $this->element()->addClass('is-horizontal');
        }
    }
}
