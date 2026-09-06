<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\RadioGroupComponent as BaseComponent;
use Lagdo\UiBuilder\Component\Traits\DirectionTrait;

class RadioGroupComponent extends BaseComponent
{
    use DirectionTrait;

    /**
     * @var string
     */
    protected string $tagName = 'wa-radio-group';

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
