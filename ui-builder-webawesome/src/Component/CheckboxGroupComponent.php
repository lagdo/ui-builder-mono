<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\CheckboxGroupComponent as BaseComponent;
use Lagdo\UiBuilder\Component\Traits\DirectionTrait;

class CheckboxGroupComponent extends BaseComponent
{
    use DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'wa-checkbox-group';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (isset($this->properties['direction'])) {
            $direction = $this->properties['direction'];
            $this->element()->setAttribute('orientation', $direction->value);
        }
    }
}
