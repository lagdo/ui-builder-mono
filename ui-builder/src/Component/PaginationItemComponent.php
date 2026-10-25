<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Component;

use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\UiBuilder\UiComponent;

abstract class PaginationItemComponent extends UiComponent
{
    use Mixin\StateTrait;

    /**
     * @var string
     */
    protected string $tagName = 'li';

    /**
     * @var HtmlElement|null
     */
    protected HtmlElement|null $url = null;

    /**
     * @return HtmlElement
     */
    protected function url(): HtmlElement
    {
        return $this->url ??= $this->newElement('a');
    }

    /**
     * @param array $attributes
     *
     * @return static
     */
    public function urlAttributes(array $attributes): static
    {
        $this->url()->setAttributes($attributes);
        return $this;
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        return $this;
    }
}
