<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\PanelMenuComponent as BaseComponent;

class PanelMenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('list-group');
        if ($this->isHorizontal()) {
            $this->element()->addClass('list-group-horizontal');
        }
    }
}
