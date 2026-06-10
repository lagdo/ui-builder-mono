<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('flex items-center justify-center text-body ' .
            'bg-neutral-secondary-medium box-border border border-default-medium ' .
            'hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm ' .
            'px-3 h-10 focus:outline-none');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $disabled = !$this->prop('enabled', true);
        // Enabled items are wrapped into a <li> element.
        // Disabled items are in a <span> element, without the <a> link.
        $disabled ? $this->element()->setTag('span') :
            $this->addWrapper($this->newElement('li'));

        $active = $this->prop('active', false);
        if ($active) {
            $this->element()->setAttribute('aria-current', 'page');
        }

        $class = match(true) {
            // Style for the <span> element.
            $disabled => 'bg-disabled w-28 border border-default-medium ' .
                'text-heading text-sm rounded-base focus:ring-brand focus:border-brand ' .
                'block px-2.5 py-2 shadow-xs placeholder:text-fg-disabled',
            // Style for the <a> element.
            $active => 'flex items-center justify-center text-fg-brand ' .
                'bg-neutral-tertiary-medium box-border border border-default-medium ' .
                'hover:text-fg-brand font-medium text-sm w-10 h-10 focus:outline-none ' .
                'first:rounded-s-base last:rounded-e-base',
            default => 'flex items-center justify-center text-body ' .
                'bg-neutral-secondary-medium box-border border border-default-medium ' .
                'hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm ' .
                'px-3 h-10 focus:outline-none first:rounded-s-base last:rounded-e-base',
        };
        $this->element()->addClass($class);
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->setAttribute('data-page', $number);
        return $this;
    }
}
