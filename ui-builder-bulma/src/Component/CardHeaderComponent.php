<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\CardHeaderComponent as BaseComponent;

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
        $this->addBaseClass('card-header-title')
            ->wrapElement($this->newElement('header', ['class' => 'card-header']));
    }
}
