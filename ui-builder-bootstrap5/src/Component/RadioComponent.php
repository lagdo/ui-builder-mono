<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;

class RadioComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('form-check-input');
        $this->element()->setAttribute('type', 'radio');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper('div', ['class' => 'input-group-text']);
            $this->element()->addClass('mt-0');
        }
    }
}
