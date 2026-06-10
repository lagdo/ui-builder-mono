<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\DropdownButtonComponent as BaseComponent;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'div';

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
    }
}
