<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
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
     * @var array
     */
    private array $activeClasses = [
        'vertical' => 'inline-flex items-center px-4 py-2.5 text-white bg-brand rounded-base active w-full',
        'lines' => 'inline-block p-4 text-fg-brand border-b border-brand rounded-t-base active',
        'pills' => 'inline-block px-4 py-2.5 text-white bg-brand rounded-base active',
        'default' => 'inline-block p-4 text-fg-brand bg-neutral-secondary-soft rounded-t-base active',
    ];

    /**
     * @var array
     */
    private array $defaultClasses = [
        'vertical' => 'inline-flex items-center px-4 py-3 rounded-base hover:text-heading hover:bg-neutral-secondary-soft w-full',
        'lines' => 'inline-block p-4 border-b border-transparent rounded-t-base hover:text-fg-brand hover:border-brand',
        'pills' => 'inline-block px-4 py-3 rounded-base hover:text-heading hover:bg-neutral-secondary-soft',
        'default' => 'inline-block p-4 rounded-t-base hover:text-heading hover:bg-neutral-secondary-soft',
    ];

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('tab')
            ->setAttribute('role', 'tab');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->active) {
            $this->element()->setAttribute('aria-current', 'page');
        }

        /** @var TabNavComponent */
        $parent = $this->parent();
        $wrapper = $this->newElement('li');
        $wrapperClass = match(true) {
            $parent->fullWidth => 'w-full focus-within:z-10',
            $parent->vertical => '',
            default => 'me-2',
        };
        if ($wrapperClass !== '') {
            $wrapper->addClass($wrapperClass);
        }

        $classes = $this->active ? $this->activeClasses : $this->defaultClasses;
        $class = $parent->vertical ? $classes['vertical'] :
            ($classes[$parent->style] ?? $classes['vertical']);
        if ($parent->fullWidth) {
            $class = "w-full $class";
        }
        $this->element()->addClass($class);
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('data-bs-target', "#$target");
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        if (!$enabled) {
            $this->element()->setAttribute('disabled', 'disabled');
        }
        return $this;
    }
}
