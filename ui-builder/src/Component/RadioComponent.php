<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class RadioComponent extends UiComponent
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
    public function checked(bool $checked = false): static
    {
        $this->element()->setAttribute('checked', $checked);
        return $this;
    }
}
