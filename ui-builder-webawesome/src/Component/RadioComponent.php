<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;

class RadioComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-radio';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->addText($label);
        return $this;
    }
}
