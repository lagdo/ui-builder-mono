<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Mixin;

use Lagdo\HtmlBuilder\Element\Html;

use function is_string;

trait LabelTrait
{
    /**
     * @param Html $html
     * @param array $attributes
     *
     * @return void
     */
    abstract protected function setLabel(Html $html, array $attributes): void;

    /**
     * @param string $label
     * @param array|string $attributes
     *
     * @return static
     */
    public function label(string $label, array|string $attributes = []): static
    {
        if (is_string($attributes)) {
            $attributes = ['for' => $attributes];
        }
        $this->setLabel(new Html($label), $attributes);
        return $this;
    }
}
