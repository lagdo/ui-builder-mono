<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav-link');
        $this->setAttributes(['type' => 'button', 'role' => 'tab', 'data-bs-toggle' => 'tab']);
        $this->addWrapper('li', ['class' => 'nav-item', 'role' => 'presentation']);
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->setAttribute('data-bs-target', "#$target");
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $active && $this->addClass('active');
        $this->setAttribute('aria-selected', $active ? 'true' : 'false');
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        !$enabled && $this->setAttribute('disabled', 'disabled');
        return $this;
    }
}
