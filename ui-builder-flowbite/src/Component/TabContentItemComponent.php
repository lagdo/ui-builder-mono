<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\TabContentItemComponent as BaseComponent;

class TabContentItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('p-4 rounded-base bg-neutral-secondary-soft')
            ->setAttribute('role', 'tabpanel');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->setAttribute('aria-labelledby', $this->getAttribute('id') . '-tab');

        $active = $this->prop('active', false);
        if (!$active) {
            $this->element()->addClass('hidden');
        }
        $this->element()->setAttribute('aria-selected', $active ? 'true' : 'false');
    }
}
