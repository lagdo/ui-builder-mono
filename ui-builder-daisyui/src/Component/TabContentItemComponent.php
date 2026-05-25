<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TabContentItemComponent as BaseComponent;

class TabContentItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('tab-pane border-base-300 bg-base-100 p-10')
            ->setAttribute('role', 'tabpanel');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->setAttribute('aria-labelledby', $this->getAttribute('id') . '-tab');
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $active || $this->element()->addClass('hidden');
        $this->element()->setAttribute('aria-selected', $active ? 'true' : 'false');
        return $this;
    }
}
