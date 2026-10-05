<?php

namespace Lagdo\UiBuilder\Bootstrap5\CoreUi;

use Lagdo\UiBuilder\Bootstrap5\Component\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav-link')
            ->setAttributes(['type' => 'button', 'role' => 'tab', 'data-coreui-toggle' => 'tab']);
        $this->addWrapper($this->newElement('li', ['class' => 'nav-item', 'role' => 'presentation']));
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('data-coreui-target', "#$target");
        return $this;
    }
}
