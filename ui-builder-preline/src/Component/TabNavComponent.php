<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'nav';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex gap-x-1')
            ->setAttributes(['role' => 'tablist', 'aria-orientation' => 'horizontal']);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $justify = $this->prop('justify', '');
        if ($justify !== '') {
            $this->element()->addClass("justify-$justify");
        }

        if ($this->parentProp(1, 'vertical', false)) {
            $this->element()->setAttribute('aria-orientation', 'vertical');
        }
    }
}
