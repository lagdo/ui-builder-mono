<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';

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
        $class = match($this->prop('style', '')) {
            'lines' => 'tabs-border',
            'pills' => 'tabs-box',
            default => 'tabs-lift',
        };
        $this->element()->addBaseClass($class);
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
