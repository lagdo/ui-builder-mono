<?php

namespace Lagdo\UiBuilder\Component;

abstract class SelectComponent extends InputComponent
{
    use Mixin\InputLabelTrait;
    use Mixin\InputValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'select';
}
