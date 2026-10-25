<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;

class TextareaComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('textarea');
    }
}
