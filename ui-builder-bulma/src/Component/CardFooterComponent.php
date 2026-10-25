<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\CardFooterComponent as BaseComponent;

class CardFooterComponent extends BaseComponent
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
        $this->addBaseClass('card-footer-item')
            ->wrapElement($this->newElement('footer', ['class' => 'card-footer']));
    }
}
