<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Base\DropdownButtonComponent as BaseComponent;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'div';
    }

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn')
            ->addClass('m-1')
            ->setAttributes([
                'tabindex' => '0',
                'role' => 'button',
            ]);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $type = $this->prop('alert') ?? $this->prop('visual', null);
        if ($type !== null) {
            $this->element()->addClass("btn-{$type->value}");
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
    }
}
