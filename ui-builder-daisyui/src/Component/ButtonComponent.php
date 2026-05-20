<?php

namespace Lagdo\UiBuilder\DaisyUi\Component;

use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), ButtonGroupComponent::class) ||
            is_a($this->parent(), InputGroupComponent::class)) {
            $this->element()->addClass('join-item');
        }
    }

    /**
     * @return static
     */
    public function large(): static
    {
        $this->element()->addClass('btn-lg');
        return $this;
    }

    /**
     * @return static
     */
    public function small(): static
    {
        $this->element()->addClass('btn-sm');
        return $this;
    }

    /**
     * @return static
     */
    public function primary(): static
    {
        $this->element()->addClass('btn-primary');
        return $this;
    }

    /**
     * @return static
     */
    public function secondary(): static
    {
        $this->element()->addClass('btn-secondary');
        return $this;
    }

    /**
     * @return static
     */
    public function success(): static
    {
        $this->element()->addClass('btn-success');
        return $this;
    }

    /**
     * @return static
     */
    public function info(): static
    {
        $this->element()->addClass('btn-info');
        return $this;
    }

    /**
     * @return static
     */
    public function warning(): static
    {
        $this->element()->addClass('btn-warning');
        return $this;
    }

    /**
     * @return static
     */
    public function danger(): static
    {
        $this->element()->addClass('btn-danger');
        return $this;
    }

    /**
     * @return static
     */
    public function outline(): static
    {
        $this->element()->addClass('btn-outline');
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->element()->addClass('btn-wide');
        return $this;
    }
}
