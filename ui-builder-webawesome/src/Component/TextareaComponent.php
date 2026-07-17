<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;

class TextareaComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-textarea';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->element()->setAttribute('label', $label);
        return $this;
    }
}
