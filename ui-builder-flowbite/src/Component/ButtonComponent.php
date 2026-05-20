<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;

class ButtonComponent extends BaseComponent
{
    /**
     * @var string
     */
    private string $type = 'default';

    /**
     * @var string
     */
    private string $size = 'default';

    /**
     * @var bool
     */
    private bool $fullWidth = false;

    /**
     * @var bool
     */
    private bool $outline = false;

    /**
     * @var array<string, array<string>>
     */
    private array $classes = [
        'default' => [
            // Tertiary is the default here.
            'default' => 'text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft shadow-xs font-medium rounded-base',
            // Primary is the default in the library.
            'primary' => 'text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base',
            'secondary' => 'text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium rounded-base',
            'success' => 'text-white bg-success box-border border border-transparent hover:bg-success-strong focus:ring-4 focus:ring-success-medium shadow-xs font-medium rounded-base',
            'info' => 'text-white bg-success box-border border border-transparent hover:bg-info-strong focus:ring-4 focus:ring-info-medium shadow-xs font-medium rounded-base',
            'warning' => 'text-white bg-warning box-border border border-transparent hover:bg-warning-strong focus:ring-4 focus:ring-warning-medium shadow-xs font-medium rounded-base',
            'danger' => 'text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium rounded-base',
        ],
        'outline' => [
            // Same as the default default.
            'default' => 'text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft shadow-xs font-medium rounded-base',
            'primary' => 'text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base',
            'secondary' => 'text-body bg-neutral-primary border border-default hover:bg-neutral-secondary-soft hover:text-heading focus:ring-4 focus:ring-neutral-tertiary font-medium rounded-base',
            'success' => 'text-success bg-neutral-primary border border-success hover:bg-success hover:text-white focus:ring-4 focus:ring-neutral-tertiary font-medium rounded-base',
            'info' => 'text-info bg-neutral-primary border border-info hover:bg-info hover:text-white focus:ring-4 focus:ring-neutral-tertiary font-medium rounded-base',
            'warning' => 'text-warning bg-neutral-primary border border-warning hover:bg-warning hover:text-white focus:ring-4 focus:ring-neutral-tertiary font-medium rounded-base',
            'danger' => 'text-danger bg-neutral-primary border border-danger hover:bg-danger hover:text-white focus:ring-4 focus:ring-neutral-tertiary font-medium rounded-base',
        ],
        'size' => [
            'default' => '',
            'large' => '',
            'small' => '',
        ],
    ];

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $classes = $this->outline ? $this->classes['outilne'] : $this->classes['default'];
        $class = ($classes[$this->type] ?? $classes['default']) .
            ' ' . $this->classes['size'][$this->size];
        $this->element()->addClass("$class focus:outline-none");
    }

    /**
     * @return static
     */
    public function large(): static
    {
        $this->size = 'large';
        return $this;
    }

    /**
     * @return static
     */
    public function small(): static
    {
        $this->size = 'small';
        return $this;
    }

    /**
     * @return static
     */
    public function primary(): static
    {
        $this->type = 'primary';
        return $this;
    }

    /**
     * @return static
     */
    public function secondary(): static
    {
        $this->type = 'secondary';
        return $this;
    }

    /**
     * @return static
     */
    public function success(): static
    {
        $this->type = 'success';
        return $this;
    }

    /**
     * @return static
     */
    public function info(): static
    {
        $this->type = 'primary';
        return $this;
    }

    /**
     * @return static
     */
    public function warning(): static
    {
        $this->type = 'warning';
        return $this;
    }

    /**
     * @return static
     */
    public function danger(): static
    {
        $this->type = 'danger';
        return $this;
    }

    /**
     * @return static
     */
    public function outline(): static
    {
        $this->outline = true;
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->fullWidth = true;
        return $this;
    }
}
