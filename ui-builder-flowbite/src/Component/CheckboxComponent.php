<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox')
            ->setClass('w-4 h-4 border border-default-medium rounded-xs ' .
                'bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes);
        $this->wrapElement($this->newElement('div', ['class' => 'flex items-center']));
        $label->addChild($html)
            ->setClass('select-none ms-2 text-sm font-medium text-heading');
        $this->appendSibling($label);
    }
}
