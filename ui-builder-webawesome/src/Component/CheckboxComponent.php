<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;

class CheckboxComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-checkbox';

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
    }
}
