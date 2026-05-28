<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

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
        $active = $this->prop('active', false);
        if ($active) {
            $this->element()->setAttribute('aria-current', 'page');
        }

        $style = $this->parentProp(1, 'style', 'default');
        $filled = $this->parentProp(1, 'filled', false);
        $vertical = $this->parentProp(2, 'vertical', false);

        $wrapper = $this->newElement('li');
        $wrapperClass = match(true) {
            $filled => 'w-full focus-within:z-10',
            $vertical => '',
            default => 'me-2',
        };
        if ($wrapperClass !== '') {
            $wrapper->addClass($wrapperClass);
        }

        $style = $this->parentProp(1, 'style', 'default');
        $classes = $active ? $this->activeClasses : $this->defaultClasses;
        $class = $vertical ? $classes['vertical'] :
            ($classes[$style] ?? $classes['vertical']);
        if ($filled) {
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
        $this->element()->setAttribute('data-tabs-target', "#$target");
        return $this;
    }
}
