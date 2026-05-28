<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\Base\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $this->element()->addClass('inline-flex items-center ' .
            'gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium');

        $visual = $this->prop('visual', null);
        $class = match($visual) {
            VisualEnum::PRIMARY => 'bg-red-100 text-red-800 dark:bg-red-500/20 dark:text-red-400',
            VisualEnum::SECONDARY => 'bg-surface text-surface-foreground',
            VisualEnum::INFO => 'bg-red-100 text-red-800 dark:bg-red-500/20 dark:text-red-400',
            VisualEnum::SUCCESS => 'bg-primary-100 text-primary-800 ' .
                'dark:bg-primary-500/20 dark:text-primary-400',
            VisualEnum::WARNING => 'bg-plain/10 text-foreground-inverse',
            VisualEnum::DANGER => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-500/20 dark:text-yellow-400',
            default => 'bg-muted text-muted-foreground-1',
        };
        $this->element()->addClass($class);
    }
}
