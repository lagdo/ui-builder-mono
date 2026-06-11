<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        if ($visual !== null) {
            $this->element()->addClass("btn-{$visual->value}");
        }

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->element()->addClass('btn-lg');
            break;
        case SizeEnum::SMALL:
            $this->element()->addClass('btn-sm');
            break;
        default:
        }

        if ($this->prop('outline', false)) {
            $this->element()->addClass('btn-outline');
        }
        if ($this->prop('fullWidth', false)) {
            $this->element()->addClass('btn-block');
        }

        $parent = $this->parent();
        if (is_a($parent, ButtonGroupComponent::class) ||
            is_a($parent, InputGroupComponent::class)) {
            $this->element()->addClass('join-item');
        }
    }
}
