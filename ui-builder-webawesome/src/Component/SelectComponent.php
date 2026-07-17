<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class SelectComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-select';

    /**
     * @inheritDoc
     */
    public function label(string $label, array $attributes = []): static
    {
        $this->element()->setAttribute('label', $label);
        return $this;
    }
}
