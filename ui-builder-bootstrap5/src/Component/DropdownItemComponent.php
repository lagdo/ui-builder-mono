<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\DropdownItemComponent as BaseComponent;

class DropdownItemComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn');
        $this->element()->addClass('dropdown-toggle');
        $this->element()->setAttributes(['type' => 'button',
            'data-bs-toggle' => 'dropdown', 'aria-expanded' => 'false']);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->element()->addBaseClass("btn-$style");
        return $this;
    }
}
