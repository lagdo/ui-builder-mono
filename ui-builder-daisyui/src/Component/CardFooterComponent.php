<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\CardFooterComponent as BaseComponent;

class CardFooterComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        // Not implemented in DaisyUi. See https://tw-elements.com/docs/standard/components/cards/.
        $this->element()->addClass('border-t-2 border-neutral-100 px-6 py-3 ' .
            'text-surface/75 dark:border-white/10 dark:text-neutral-300');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        return $this;
    }
}
