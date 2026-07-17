<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;

class CheckboxComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-checkbox';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->addText($label);
        return $this;
    }
}
