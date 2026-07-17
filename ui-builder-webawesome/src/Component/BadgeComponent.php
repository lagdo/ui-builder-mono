<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-badge';

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        $variant = match($visual) {
            VisualEnum::PRIMARY => 'brand',
            VisualEnum::SECONDARY => 'neutral',
            VisualEnum::INFO => 'brand', // Same as primary.
            VisualEnum::SUCCESS => 'success',
            VisualEnum::WARNING => 'warning',
            VisualEnum::DANGER => 'danger',
        };
        $this->element()->setAttribute('variant', $variant);
    }
}
