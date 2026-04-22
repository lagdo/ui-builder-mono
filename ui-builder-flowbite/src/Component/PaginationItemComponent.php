<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\PaginationItemComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'a';

    /**
     * @var bool
     */
    private bool $active = false;

    /**
     * @var bool
     */
    private bool $enabled = true;

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
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        $style = match(true) {
            // Style for the <span> element.
            !$this->enabled => 'bg-disabled w-28 border border-default-medium ' .
                'text-heading text-sm rounded-base focus:ring-brand focus:border-brand ' .
                'block px-2.5 py-2 shadow-xs placeholder:text-fg-disabled',
            // Style for the <a> element.
            $this->active => 'flex items-center justify-center text-fg-brand ' .
                'bg-neutral-tertiary-medium box-border border border-default-medium ' .
                'hover:text-fg-brand font-medium text-sm w-10 h-10 focus:outline-none ' .
                'first:rounded-s-base last:rounded-e-base',
            default => 'flex items-center justify-center text-body ' .
                'bg-neutral-secondary-medium box-border border border-default-medium ' .
                'hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm ' .
                'px-3 h-10 focus:outline-none first:rounded-s-base last:rounded-e-base',
        };
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active): static
    {
        $this->active = $active;
        if ($active) {
            $this->element()->setAttribute('aria-current', 'page');
        }
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        $this->enabled = $enabled;
        // Enabled items are wrapped into a <li> element.
        // Disabled items are in a <span> element, without the <a> link.
        !$enabled ? $this->element()->setTag('span') :
            $this->addWrapper($this->newElement('li'));
        return $this;
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
