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
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        if (!$active) {
            $this->element()->addClass('hidden');
        }
        return $this;
    }
}
