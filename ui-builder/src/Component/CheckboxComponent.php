<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class CheckboxComponent extends UiComponent
{
    use Mixin\LabelTrait;

    /**
     * @var string
     */
    protected string $tagName = 'input';

    /**
     * @param bool $checked
     *
     * @return static
     */
    public function checked(bool $checked = true): static
    {
        $this->element()->setAttribute('checked', $checked);
        return $this;
    }
}
