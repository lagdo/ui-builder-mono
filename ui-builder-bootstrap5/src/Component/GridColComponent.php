<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\GridColComponent as BaseComponent;

class GridColComponent extends BaseComponent
{
    /**
     * @param int $width
     *
     * @return static
     */
    public function width(int $width): static
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $this->addBaseClass("col-$width");
        return $this;
    }
}
