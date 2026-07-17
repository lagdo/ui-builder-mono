<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\DropdownButtonComponent as BaseComponent;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-button';

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->setAttributes([
            'appearance' => 'filled',
            'slot' => 'trigger',
            'with-caret' => true,
        ]);
    }
}
