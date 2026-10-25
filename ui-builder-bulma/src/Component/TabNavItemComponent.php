<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // The tabs js script uses this to handle the click event.
        $this->element()->addClass('tab-nav-item');

        $wrapper = $this->newElement('li');
        if ($this->prop('active', false)) {
            $wrapper->addClass('is-active');
        }
        if (!$this->prop('enabled', true)) {
            $wrapper->setAttribute('disabled', true);
        }

        $target = $this->prop('target');
        if ($target !== null) {
            $wrapper->setAttribute('data-target', $target);
        }

        $this->wrapElement($wrapper);
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->setProp('target', $target);
        return $this;
    }
}
