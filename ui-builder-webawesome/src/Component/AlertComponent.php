<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\Attr\LevelEnum;
use Lagdo\UiBuilder\Component\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-callout';

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        $variant = match($level) {
            LevelEnum::INFO => 'brand',
            LevelEnum::SUCCESS => 'success',
            LevelEnum::WARNING => 'warning',
            LevelEnum::DANGER => 'danger',
            default => 'neutral',
        };
        $this->element()->setAttribute('variant', $variant);
    }
}
