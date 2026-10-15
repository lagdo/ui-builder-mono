<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @param bool $filled
     *
     * @return static
     */
    public function fill(bool $filled = true): static
    {
        $this->parent()?->setProp('fullwidth', $filled);
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        $this->parent()?->setProp('justify', $justify);
        return $this;
    }
}
