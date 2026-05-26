<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'ul';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('role', 'tablist');
    }

    /**
     * @return void
     */
    private function setProperties(): void
    {
        $contentId = $this->parentProp(1, 'content', null);
        if ($contentId !== null) {
            $this->element()->setAttribute('data-tabs-toggle', "#$contentId");
            if (!$this->element()->hasAttribute('id')) {
                $this->element()->setAttribute('id', "{$contentId}-tabs");
            }
        }

        $justify = $this->prop('justify', '');
        if ($justify !== '') {
            $this->element()->addClass("justify-$justify");
        }
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->parentProp(1, 'vertical', false)) {
            $this->element()->addClass('flex-column space-y space-y-4 ' .
                'text-sm font-medium text-body md:me-4 mb-4 md:mb-0');
            $this->setProperties();
            return;
        }

        $class = match($this->prop('style', '')) {
            'lines' => 'text-sm font-medium text-center text-body border-b border-default',
            'pills' => 'flex flex-wrap text-sm font-medium text-center text-body',
            default => 'flex flex-wrap text-sm font-medium text-center text-body border-b border-default',
        };
        $this->element()->addClass($class);
        $this->setProperties();
    }
}
