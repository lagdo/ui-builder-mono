<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TabContentItemComponent as BaseComponent;

class TabContentItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $display = $this->prop('active', false) ? 'block' : 'none';
        $this->element()->addStyle('display', $display);
    }
}
