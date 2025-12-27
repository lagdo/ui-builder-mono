<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\BadgeComponent as BaseComponent;

use function is_a;

class BadgeComponent extends BaseComponent
{
    /**
     * @var bool
     */
    private bool $onTop = false;

    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('badge');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    public function onBuild(HtmlComponent $parent): void
    {
        // A badge is moved on top only if its parent is a button.
        if ($this->onTop && is_a($parent, ButtonComponent::class)) {
            $parent->addClass('position-relative');
            $this->addClass('position-absolute top-0 start-100 translate-middle p-2');
        }
    }

    /**
     * @return static
     */
    public function top(): static
    {
        $this->onTop = true;
        return $this;
    }

    /**
     * @param string $type
     *
     * @return static
     */
    public function type(string $type): static
    {
        $this->addClass("bg-$type");
        return $this;
    }

    /**
     * @param string $rounded
     *
     * @return static
     */
    public function rounded(string $rounded): static
    {
        $this->addClass("rounded-$rounded");
        return $this;
    }

    /**
     * @param string $border
     *
     * @return static
     */
    public function border(string $border): static
    {
        $this->addClass("border border-$border");
        return $this;
    }
}
