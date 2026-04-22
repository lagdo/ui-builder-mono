<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

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
        $this->element()->addClass('join-item btn btn-outline');
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active): static
    {
        $this->element()->removeClass('btn-active');
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
        $this->element()->removeClass('btn-disabled');
        if (!$enabled) {
            $this->element()->addBaseClass('btn-disabled');
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
