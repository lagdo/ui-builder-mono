<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component\Mixin;

use Lagdo\UiBuilder\Component\Attr\DirectionEnum;

trait DirectionTrait
{
    /**
     * @return DirectionEnum
     */
    abstract protected function defaultDirection(): DirectionEnum;

    /**
     * @param DirectionEnum $direction
     *
     * @return static
     */
    public function direction(DirectionEnum $direction): static
    {
        return $this->setProp('direction', $direction);
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        return $this->direction(DirectionEnum::HORIZONTAL);
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        return $this->direction(DirectionEnum::VERTICAL);
    }

    /**
     * @return DirectionEnum
     */
    private function getDirection(): DirectionEnum
    {
        return $this->prop('direction', $this->defaultDirection());
    }

    /**
     * @return bool
     */
    public function isHorizontal(): bool
    {
        return $this->getDirection() === DirectionEnum::HORIZONTAL;
    }

    /**
     * @return bool
     */
    public function isVertical(): bool
    {
        return $this->getDirection() === DirectionEnum::VERTICAL;
    }
}
