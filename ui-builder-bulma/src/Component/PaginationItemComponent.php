<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('enabled', true)) {
            $this->url()->setClass('pagination-link');
            if ($this->prop('active', false)) {
                $this->url()->addClass('is-current')
                    ->setAttribute('aria-current', 'page');
            }
            $this->wrapChildren($this->url());
            return;
        }

        $this->wrapChildren($this->newElement('span', ['class' => 'pagination-ellipsis']));
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->element()->addClass('enabled')
            ->setAttribute('data-page', "$number");
        return $this;
    }
}
