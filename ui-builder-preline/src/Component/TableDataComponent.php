<?php

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\Base\TableDataComponent as BaseComponent;

use function get_class;

class TableDataComponent extends BaseComponent
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
            $class = $zone === 'head' ?
                'px-6 py-3 text-start text-xs font-medium text-muted-foreground-1' :
                'px-6 py-4 whitespace-nowrap text-sm text-foreground';
            $this->element()->addClass($class)
                ->setAttribute('scope', $zone === 'head' ? 'col' : 'row');
        }
    }
}
