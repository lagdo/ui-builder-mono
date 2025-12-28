<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\DropdownItemComponent as BaseComponent;

class DropdownItemComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn');
        $this->addClass('dropdown-toggle');
        $this->setAttributes(['type' => 'button',
            'data-bs-toggle' => 'dropdown', 'aria-expanded' => 'false']);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->addBaseClass("btn-$style");
        return $this;
    }
}
