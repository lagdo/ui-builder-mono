<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;

class SwitchComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-switch';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->addText($label);
        return $this;
    }
}
