<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $this->addClass('notification');
        $level = $this->prop('level', null);
        if ($level !== null) {
            $this->addClass("is-{$level->value} is-light");
        }
    }
}
