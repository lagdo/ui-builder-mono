<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('tab')
            ->setAttribute('role', 'tab');
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

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        if ($active) {
            $this->element()->addClass('tab-active');
        }
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        if (!$enabled) {
            $this->element()->setAttribute('disabled', 'disabled');
        }
        return $this;
    }
}
