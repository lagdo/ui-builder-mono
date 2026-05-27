<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TabContentItemComponent as BaseComponent;

class TabContentItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->element()->setAttributes([
            'role' => 'tabpanel',
            'aria-labelledby' => $this->getAttribute('id') . '-item',
        ]);

        if (!$this->prop('active', false)) {
            $this->element()->addClass('hidden');
        }
    }
}
