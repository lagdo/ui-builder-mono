<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'button';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('join-item btn')
            ->setAttribute('type', 'button');
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active): static
    {
        if ($active) {
            $this->element()->addClass('btn-active');
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
        if (!$enabled) {
            $this->element()->addClass('btn-disabled');
        }
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
