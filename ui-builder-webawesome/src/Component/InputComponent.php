<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;

class InputComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'wa-input';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->element()->setAttribute('label', $label);
        return $this;
    }
}
