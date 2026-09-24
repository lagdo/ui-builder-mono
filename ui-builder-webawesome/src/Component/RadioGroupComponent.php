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
        if (($direction = $this->prop('direction', null)) !== null) {
            $this->element()->setAttribute('orientation', $direction->value);
        }
    }
}
