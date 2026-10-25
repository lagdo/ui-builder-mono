<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\FormFieldComponent as BaseComponent;

class FormFieldComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes);
        $label->addClass('block mb-2.5 text-sm font-medium text-heading')
            ->addChild($html);
        $this->prependSibling($label);
    }
}
