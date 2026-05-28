<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('tab')
            ->setAttribute('role', 'tab');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('tab-active');
        }
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('data-tabs-target', "#$target");
        return $this;
    }
}
