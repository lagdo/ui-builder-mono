<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\TabContentItemComponent as BaseComponent;

class TabContentItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-tab-panel';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->element()->setAttribute('name', $this->getAttribute('id'));
        if (!$this->prop('active', false)) {
            $this->element()->setAttribute('active', true);
        }
    }
}
