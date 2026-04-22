<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @var bool
     */
    public bool $isVertical = true;

    /**
     * @return static
     */
    public function vertical(): static
    {
        $this->isVertical = true;
        $this->element()->addClass('max-w-xs w-full flex flex-col');
        return $this;
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        $this->isVertical = false;
        $this->element()->addClass('w-full flex flex-col sm:flex-row');
        return $this;
    }
}
