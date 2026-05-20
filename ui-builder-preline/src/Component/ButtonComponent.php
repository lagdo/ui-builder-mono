<?php

namespace Lagdo\UiBuilder\Preline\Component;

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
            'default' => 'border border-layer-line bg-layer text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus',
            'primary' => 'bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus',
            'secondary' => 'bg-surface-4 border border-surface-line text-foreground-inverse hover:bg-surface-5 focus:outline-hidden focus:bg-surface-5',
            'success' => 'bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-hover',
            'info' => 'bg-red-500 border border-transparent text-foreground-inverse hover:bg-red-600 focus:outline-hidden focus:bg-red-600',
            'warning' => 'bg-plain border border-transparent text-inverse hover:bg-plain/90 focus:outline-hidden focus:bg-plain/90',
            'danger' => 'bg-yellow-500 border border-transparent text-foreground-inverse hover:bg-yellow-600 focus:outline-hidden focus:bg-yellow-600',
        ],
        'outline' => [
            'default' => 'border border-layer-line text-muted-foreground-1 hover:border-primary-hover hover:text-primary-hover focus:outline-hidden focus:border-primary-focus focus:text-primary-focus',
            'primary' => 'border border-line-8 text-foreground hover:border-primary-hover hover:text-primary-hover focus:outline-hidden focus:border-primary-focus focus:text-primary-focus',
            'secondary' => 'border border-line-5 text-muted-foreground-1 hover:border-line-8 hover:text-foreground focus:outline-hidden focus:border-line-8 focus:text-foreground',
            'success' => 'border border-primary text-primary hover:border-primary-hover hover:text-primary-hover focus:outline-hidden focus:border-primary-focus focus:text-primary-focus',
            'info' => 'border border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 focus:outline-hidden focus:border-red-400 focus:text-red-400',
            'warning' => 'border border-line-inverse text-foreground-inverse hover:border-line-inverse/70 hover:text-foreground-inverse/70 focus:outline-hidden focus:border-line-inverse/70 focus:text-foreground-inverse/70',
            'danger' => 'border border-yellow-500 text-yellow-500 hover:border-yellow-400 focus:outline-hidden focus:border-yellow-400 focus:text-yellow-400',
        ],
        'size' => [
            'default' => 'py-3 px-4',
            'large' => 'p-4 sm:p-5',
            'small' => 'py-2 px-3',
        ],
    ];

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $sizeClass = $this->classes['size'][$this->size];
        if ($this->fullWidth) {
            $sizeClass .= ' w-full';
        }
        $classes = $this->outline ? $this->classes['outline'] : $this->classes['default'];
        $typeClass = $classes[$this->type] ?? $classes['default'];
        $this->element()->addClass("$sizeClass inline-flex items-center gap-x-2 text-sm " .
            "font-medium rounded-lg $typeClass disabled:opacity-50 disabled:pointer-events-none");
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
