<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\CardFooterComponent as BaseComponent;

class CardFooterComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'p';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('div', [
            'class' => 'bg-surface border-t border-card-line rounded-b-xl py-3 px-4',
        ]));
        $this->element()->addClass('text-sm text-muted-foreground-1');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function skin(string $style): static
    {
        return $this;
    }
}
