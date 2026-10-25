<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

abstract class TextareaComponent extends InputComponent
{
    use Mixin\ValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'textarea';
}
