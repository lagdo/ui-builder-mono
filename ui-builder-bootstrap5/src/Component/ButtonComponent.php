<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn')
            ->setAttribute('type', 'button');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $type = $this->prop('alert') ?? $this->prop('visual', null);
        $prefix = $type === null || $this->prop('outline', false) ? 'btn-outline-' : 'btn-';
        $this->element()->addClass($prefix . ($type?->value ?? 'secondary'));

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->element()->addClass('btn-lg');
            break;
        case SizeEnum::SMALL:
            $this->element()->addClass('btn-sm');
            break;
        default:
        }

        if ($this->prop('fullWidth', false) &&
            !is_a($this->parent(), ButtonGroupComponent::class)) {
            $this->element()->addClass('w-100');
        }
    }
}
