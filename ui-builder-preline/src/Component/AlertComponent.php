<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Attr\LevelEnum;
use Lagdo\UiBuilder\Component\Base\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->setAttributes(['role' => 'alert', 'tabindex' => '-1']);
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        $class = match($level) {
            LevelEnum::INFO => 'bg-primary-100 border border-primary-200 text-sm text-primary-800 ' .
                'rounded-lg p-4 dark:bg-primary-500/20 dark:border-primary-900 dark:text-primary-400',
            LevelEnum::SUCCESS => 'bg-teal-100 border border-teal-200 text-sm text-teal-800 ' .
                'rounded-lg p-4 dark:bg-teal-500/20 dark:border-teal-900 dark:text-teal-400',
            LevelEnum::WARNING => 'bg-yellow-100 border border-yellow-200 text-sm text-yellow-800 ' .
                'rounded-lg p-4 dark:bg-yellow-500/20 dark:border-yellow-900 dark:text-yellow-400',
            LevelEnum::DANGER => 'bg-red-100 border border-red-200 text-sm text-red-800 ' .
                'rounded-lg p-4 dark:bg-red-500/20 dark:border-red-900 dark:text-red-400',
            default => 'bg-muted border border-line-2 text-sm text-foreground rounded-lg p-4',
        };
        $label = $level?->value ?? 'secondary';
        $this->element()->addClass($class)
            ->setAttribute('aria-labelledby', "hs-soft-color-$label-label");
    }
}
