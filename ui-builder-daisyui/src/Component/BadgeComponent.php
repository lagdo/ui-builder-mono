<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\Base\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('badge badge-soft');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        if ($visual !== null && $visual !== VisualEnum::DEFAULT) {
            $this->element()->addClass("badge-{$visual->value}");
        }
    }
}
