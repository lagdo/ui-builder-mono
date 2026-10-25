<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\CardImageComponent as BaseComponent;

class CardImageComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->wrapElement($this->newElement('figure', [
            'class' => 'image',
        ]))->wrapElement($this->newElement('div', [
            'class' => 'card-image',
        ]));
    }
}
