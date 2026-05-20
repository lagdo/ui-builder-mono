<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'nav';

    /**
     * @var string
     */
    public string $style = 'default';

    /**
     * @var bool
     */
    public bool $fullWidth = false;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('flex gap-x-1')
            ->setAttributes(['role' => 'tablist', 'aria-orientation' => 'horizontal']);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        $this->element()->setAttribute('aria-orientation', 'vertical');
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->fullWidth = false;
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        $this->element()->addClass("justify-$justify");
        return $this;
    }
}
