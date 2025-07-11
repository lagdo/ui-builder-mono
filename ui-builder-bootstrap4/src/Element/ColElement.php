<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\ColElement as BaseElement;

class ColElement extends BaseElement
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
        $this->addBaseClass("col-md-$width");
        return $this;
    }
}
