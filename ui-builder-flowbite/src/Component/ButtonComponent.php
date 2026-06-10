<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\ButtonComponent as BaseComponent;

class ButtonComponent extends BaseComponent
{
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
            'default' => 'leading-5 px-4 py-2.5',
            'large' => 'px-5 py-3',
            'small' => 'leading-5 px-3 py-2',
        ],
    ];

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        $classes = $this->prop('outline', false) ?
            $this->classes['outline'] : $this->classes['default'];
        $class = $classes[$visual?->value ?? ''] ?? $classes['default'];
        $this->element()->addClass($class);

        $size = $this->prop('size', SizeEnum::DEFAULT);
        $this->element()->addClass($this->classes['size'][$size->value]);
        $this->element()->addClass('focus:outline-none');
    }
}
