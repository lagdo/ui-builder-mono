<?php

namespace Lagdo\UiBuilder\Bootstrap5\Element;

use Lagdo\UiBuilder\Element\Html\TabNavElement as BaseElement;

class TabNavElement extends BaseElement
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav');
        $this->addBaseClass('nav-tabs');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        // Replace the second class.
        $this->classes[0][1] = 'nav-' . trim($style);
        return $this;
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        // Replace the second class.
        $this->classes[0][2] = 'flex-column';
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        // Replace the second class.
        $this->classes[0][2] = 'nav-fill';
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        return $this;
    }
}
