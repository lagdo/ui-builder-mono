<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Mixin;

trait ValidationTrait
{
    /**
     * @param bool $required
     *
     * @return static
     */
    public function required(bool $required = true): static
    {
        $this->element()->setAttribute('required', $required);
        return $this;
    }

    /**
     * @param bool $valid
     *
     * @return static
     */
    public function feedback(bool $valid): static
    {
        return $this;
    }

    /**
     * @param string $message
     *
     * @return static
     */
    public function help(string $message): static
    {
        return $this;
    }
}
