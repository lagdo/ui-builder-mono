<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Mixin;

use Lagdo\UiBuilder\Component\Attr\VariantEnum;

trait VariantTrait
{
    /**
     * @param VariantEnum $variant
     *
     * @return static
     */
    public function variant(VariantEnum $variant): static
    {
        return $this->setProp('variant', $variant);
    }

    /**
     * @return static
     */
    public function outline(): static
    {
        return $this->setProp('outline', true)
            ->variant(VariantEnum::OUTLINE);
    }

    /**
     * @return static
     */
    public function light(): static
    {
        return $this->variant(VariantEnum::LIGHT);
    }

    /**
     * @return static
     */
    public function ghost(): static
    {
        return $this->variant(VariantEnum::GHOST);
    }
}
