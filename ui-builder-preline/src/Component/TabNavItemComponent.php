<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'button';

    /**
     * @var bool
     */
    private bool $active = false;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttributes(['type' => 'button', 'role' => 'tab']);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // Pills
        // $class = 'items-center gap-x-2 bg-transparent text-sm font-medium ' .
        //     'text-center text-muted-foreground-1 hover:text-primary-hover ' .
        //     'focus:outline-hidden focus:text-primary-focus rounded-lg ' .
        //     'disabled:opacity-50 disabled:pointer-events-none';
        // Lines
        // $class = 'hs-tab-active:font-semibold hs-tab-active:text-primary-active ' .
        //     'hs-tab-active:after:bg-primary-active relative py-4 px-1 inline-flex ' .
        //     'items-center gap-x-2 text-sm whitespace-nowrap text-muted-foreground-1 ' .
        //     'after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 ' .
        //     'after:bg-transparent hover:text-primary-hover focus:outline-hidden ' .
        //     'focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none';
        // Default
        $class = 'hs-tab-active:bg-layer hs-tab-active:border-b-transparent ' .
            'hs-tab-active:text-primary-active -mb-px py-3 px-4 inline-flex items-center ' .
            'gap-x-2 bg-muted text-sm font-medium text-center border border-line-2 ' .
            'text-muted-foreground-1 rounded-t-lg hover:text-foreground focus:outline-hidden ' .
            'focus:text-foreground disabled:opacity-50 disabled:pointer-events-none';
        /** @var TabNavComponent */
        $parent = $this->parent();
        if ($parent->fullWidth) {
            $class .= ' flex-auto justify-center';
        }
        if ($this->active) {
            $class .= ' active';
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
        $this->element()->setAttributes([
            'data-hs-tab' => "#$target",
            'aria-controls' => $target,
        ]);
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
