<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\UiBuilder\UiComponent;

abstract class TabNavComponent extends UiComponent
{
    /**
     * @var string
     */
    protected string $tagName = '';

    /**
     * @param bool $filled
     *
     * @return static
     */
    public function fill(bool $filled = true): static
    {
        return $this->setProp('filled', $filled)
            ->setProp('justified', $filled);
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        return $this->setProp('justify', $justify);
    }
}
