<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\CardHeaderComponent as BaseComponent;

class CardHeaderComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        // Not implemented in DaisyUi. See https://tw-elements.com/docs/standard/components/cards/.
        $this->element()->addClass('border-b-2 border-neutral-100 px-6 py-3 dark:border-white/10');
    }
}
