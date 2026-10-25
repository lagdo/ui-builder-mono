<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\FormFieldComponent as BaseComponent;

class FormFieldComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
    }
}
