<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;

class RadioComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'radio')
            ->setClass('w-4 h-4 text-neutral-primary border-default-medium ' .
                'bg-neutral-secondary-medium rounded-full checked:border-brand ' .
                'focus:ring-2 focus:outline-none focus:ring-brand-subtle border ' .
                'border-default appearance-none');
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
