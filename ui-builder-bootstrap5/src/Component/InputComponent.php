<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\InputComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

class InputComponent extends BaseComponent
{
    use Traits\InputValidationTrait;

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if ($this->inForm()) {
            $this->element()->addBaseClass('form-control');
        }

        $this->setForLabelAttr();
    }
}
