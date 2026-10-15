<?php

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class RadioComponent extends UiComponent
{
    use Mixin\InputLabelTrait;
    use Mixin\InputValidationTrait;

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
        $this->element()->setAttribute('checked', $checked ? 'checked' : false);
        return $this;
    }
}
