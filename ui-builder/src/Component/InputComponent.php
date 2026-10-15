<?php

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class InputComponent extends UiComponent
{
    use Mixin\InputLabelTrait;
    use Mixin\InputValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'input';
}
