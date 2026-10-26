<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('badge');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        if ($this->prop('outline', false)) {
            $this->element()->addClass('is-outlined');
        }
        $visual = $this->prop('visual', null);
        if ($visual !== null) {
            $class = $visual === VisualEnum::ERROR ? 'danger' : $visual->value;
            $this->element()->addClass("is-{$class}");
        }
        if (!$this->prop('top', false)) {
            $this->element()->addClass('is-inside-right');
            // $this->parent()->addStyle('padding-right', '40px');
        }
    }

    /**
     * @return static
     */
    public function top(): static
    {
        $this->setProp('top', true);
        return $this;
    }
}
