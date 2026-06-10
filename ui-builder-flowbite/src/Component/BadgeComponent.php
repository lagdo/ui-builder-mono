<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        $class = match($visual) {
            VisualEnum::PRIMARY => 'bg-brand-softer text-fg-brand-strong ' .
                'text-xs font-medium px-1.5 py-0.5 rounded', // Brand
            VisualEnum::SECONDARY => 'bg-neutral-secondary-medium text-heading ' .
                'text-xs font-medium px-1.5 py-0.5 rounded', // Gray
            VisualEnum::INFO => 'bg-brand-softer text-fg-brand-strong ' .
                'text-xs font-medium px-1.5 py-0.5 rounded', // Brand
            VisualEnum::SUCCESS => 'bg-success-soft text-fg-success-strong ' .
                'text-xs font-medium px-1.5 py-0.5 rounded', // Success
            VisualEnum::WARNING => 'bg-warning-soft text-fg-warning text-xs ' .
                'font-medium px-1.5 py-0.5 rounded', // Warning
            VisualEnum::DANGER => 'bg-danger-soft text-fg-danger-strong ' .
                'text-xs font-medium px-1.5 py-0.5 rounded', // Danger
            default => 'bg-neutral-primary-soft text-heading text-xs ' .
                'font-medium px-1.5 py-0.5 rounded', // Alternative
        };
        $this->element()->addClass($class);
    }
}
