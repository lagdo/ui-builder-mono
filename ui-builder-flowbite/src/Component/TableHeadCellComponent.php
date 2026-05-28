<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TableHeadCellComponent as BaseComponent;

use function get_class;

class TableHeadCellComponent extends BaseComponent
{
    /**
     * @return string
     */
    private function getZone(): string
    {
        $parent = $this->parent()?->parent();
        return $parent === null ? '' : match(get_class($parent)) {
            TableHeadComponent::class => 'head',
            TableBodyComponent::class => 'body',
            TableFootComponent::class => 'foot',
            default => '',
        };
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        parent::onBuild();

        $zone = $this->getZone();
        if ($zone !== '') {
            $class = match(true) {
                $zone !== 'body' => 'px-6 py-3 font-medium',
                // $this->element()->tag() === 'td' => 'px-6 py-4',
                $this->parentProp(1, 'stripe', false) =>
                    'bg-neutral-secondary-soft border-b border-default',
                default => 'px-6 py-4 font-medium text-heading whitespace-nowrap',
            };
            $this->element()->addClass($class)
                ->setAttribute('scope', $zone === 'head' ? 'col' : 'row');
        }
    }
}
