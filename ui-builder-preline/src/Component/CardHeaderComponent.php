<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\CardHeaderComponent as BaseComponent;

class CardHeaderComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'p';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('div', [
            'class' => 'bg-surface border-b border-card-line rounded-t-xl py-3 px-4',
        ]));
        $this->element()->addClass('text-sm text-muted-foreground-1');
    }
}
