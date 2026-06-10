<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('alert alert-soft');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        if ($level !== null) {
            $this->element()->addClass("alert-{$level->value}");
        }
    }
}
