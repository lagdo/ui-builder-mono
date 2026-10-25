<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

class SelectComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->newElement('div', ['class' => 'control']);
        $this->wrapElement($this->newElement('div', ['class' => 'select']))
            ->wrapElement($wrapper);
        if ($this->prop('shrink', false)) {
            $wrapper->addClass('is-label');
        }
    }
}
