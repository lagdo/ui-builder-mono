<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\ButtonGroupElement as BaseElement;

class ButtonGroupElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('btn-group');
        $this->setAttribute('role', 'group');
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->appendClass('d-flex');
        return $this;
    }
}
