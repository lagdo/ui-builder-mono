<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;

class InputComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @var string
     */
    protected string $tagName = 'wa-input';
}
