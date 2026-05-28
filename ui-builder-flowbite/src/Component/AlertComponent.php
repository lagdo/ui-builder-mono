<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Attr\LevelEnum;
use Lagdo\UiBuilder\Component\Base\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex items-start sm:items-center p-4 mb-4 text-sm rounded-base')
            ->setAttribute('role', 'alert');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        $class = match($level) {
            LevelEnum::INFO => 'text-fg-brand-strong bg-brand-softer border border-brand-subtle',
            LevelEnum::SUCCESS => 'text-fg-success-strong bg-success-soft border border-success-subtle',
            LevelEnum::WARNING => 'text-fg-warning bg-warning-soft border border-warning-subtle',
            LevelEnum::DANGER => 'text-fg-danger-strong bg-danger-soft border border-danger-subtle',
            default => 'text-heading bg-neutral-secondary-medium border border-default-medium',
        };
        $this->element()->addClass($class);
    }
}
