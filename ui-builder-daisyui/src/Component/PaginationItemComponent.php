<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addClass('join-item btn btn-outline');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('btn-active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->addClass('btn-disabled');
        }
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
