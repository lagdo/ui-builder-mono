<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\DropdownItemElement as BaseElement;

class DropdownItemElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->prependClass('btn');
        $this->appendClass('dropdown-toggle');
        $this->setAttributes(['type' => 'button',
            'data-bs-toggle' => 'dropdown', 'aria-expanded' => 'false']);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->prependClass("btn-$style");
        return $this;
    }
}
