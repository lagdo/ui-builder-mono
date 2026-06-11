<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav-link')
            ->setAttributes(['type' => 'button', 'role' => 'tab', 'data-bs-toggle' => 'tab']);
        $this->addWrapper($this->newElement('li', ['class' => 'nav-item', 'role' => 'presentation']));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $active = $this->prop('active', false);
        if ($active) {
            $this->element()->addClass('active');
        }
        $this->element()->setAttribute('aria-selected', $active ? 'true' : 'false');
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('data-bs-target', "#$target");
        return $this;
    }
}
