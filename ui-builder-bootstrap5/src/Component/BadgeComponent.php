<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component;

use Lagdo\UiBuilder\Component\Base\BadgeComponent as BaseComponent;

use function is_a;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('badge');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $type = $this->prop('alert') ?? $this->prop('visual', null);
        $type = $type?->value ?? 'light';
        $this->element()->addClass("bg-$type");
        // The text is dark for some types of badges.
        if (!isset($this->properties['alert'])) {
            $this->element()->addClass('text-dark');
        }

        $parent = $this->parent();
        // A badge is moved on top only if its parent is a button.
        if ($this->prop('onTop', false) && is_a($parent, ButtonComponent::class)) {
            $parent->element()->addClass('position-relative');
            $this->element()->addClass('position-absolute top-0 start-100 translate-middle p-2');
        }
    }

    /**
     * @return static
     */
    public function top(): static
    {
        $this->properties['onTop'] = true;
        return $this;
    }
}
