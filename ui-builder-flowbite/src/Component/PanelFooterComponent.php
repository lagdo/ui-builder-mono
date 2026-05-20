<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\PanelFooterComponent as BaseComponent;

class PanelFooterComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('text-sm font-medium text-center text-body ' .
            'bg-neutral-secondary-soft border-b border-default rounded-b-base');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        return $this;
    }
}
