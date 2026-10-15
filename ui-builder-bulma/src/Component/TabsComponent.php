<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TabsComponent as BaseComponent;

class TabsComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('tabs');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addClass('is-boxed');
        if ($this->prop('fullwidth', false)) {
            $this->addClass('is-fullwidth');
        }
        switch ($this->prop('justify')) {
            case 'center':
                $this->addClass('is-centered');
                break;
            case 'right':
                $this->addClass('is-right');
                break;
            default:
                break;
        }
    }
}
