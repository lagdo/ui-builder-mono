<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'div';

    /**
     * @var string
     */
    private string $style = '';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('tabs')
            ->setAttribute('role', 'tablist');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $class = match($this->style) {
            'lines' => 'tabs-border',
            'pills' => 'tabs-box',
            default => 'tabs-lift',
        };
        $this->element()->addBaseClass($class);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        return $this;
    }

    /**
     * @return static
     */
    public function fill(): static
    {
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        $this->element()->addClass("justify-$justify");
        return $this;
    }
}
