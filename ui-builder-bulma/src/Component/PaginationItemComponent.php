<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('li'));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (!$this->prop('enabled', true)) {
            $this->element()->setTag('span');
            $this->addClass('pagination-ellipsis');
            return;
        }

        $this->addClass('pagination-link');
        if ($this->prop('active', false)) {
            $this->addClass('is-current')
                ->setAttribute('aria-current', 'page');
        }
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->wrapper(0)->setAttribute('data-page', "$number");
        return $this;
    }
}
