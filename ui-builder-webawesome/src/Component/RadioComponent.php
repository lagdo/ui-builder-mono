<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;

class RadioComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-radio';

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
    }
}
