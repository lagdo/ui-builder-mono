<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;

class SwitchComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-switch';

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
    }
}
