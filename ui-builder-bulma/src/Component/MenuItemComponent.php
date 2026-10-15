<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\MenuItemComponent as BaseComponent;

class MenuItemComponent extends BaseComponent
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
        $this->addBaseClass('panel-block');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('is-active')
                ->setStyle('color: rgb(245, 246, 255); background-color: rgb(66, 88, 255);');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->setDisabled('disabled');
        }
    }
}
