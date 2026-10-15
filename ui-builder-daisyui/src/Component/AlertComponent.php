<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\AlertComponent as BaseComponent;
use Lagdo\UiBuilder\Component\Attr\LevelEnum;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('alert');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        if ($level !== null) {
            $class = $level === LevelEnum::DANGER ? 'error' : $level->value;
            $this->element()->addClass("alert-{$class}");
        }
    }
}
