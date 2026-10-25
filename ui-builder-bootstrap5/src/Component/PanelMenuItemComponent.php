<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\PanelMenuItemComponent as BaseComponent;

class PanelMenuItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('list-group-item list-group-item-action');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->addClass('disabled');
        }
    }
}
