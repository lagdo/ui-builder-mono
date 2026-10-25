<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\ButtonGroupComponent as BaseComponent;

class ButtonGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('buttons has-addons');
        if ($this->prop('fullWidth', false)) {
            $this->addBaseClass('is-fullwidth');
        }
    }
}
