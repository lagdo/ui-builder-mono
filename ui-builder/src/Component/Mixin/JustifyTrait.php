<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Mixin;

use Lagdo\UiBuilder\Component\Attr\JustifyEnum;

trait JustifyTrait
{
    /**
     * @param JustifyEnum $justify
     *
     * @return static
     */
    public function justify(JustifyEnum $justify): static
    {
        return $this->setProp('justify', $justify);
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        return $this->setProp('fullWidth', true)
            ->justify(JustifyEnum::FULL);
    }
}
