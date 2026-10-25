<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

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
            ->setClass('shrink-0 size-4 bg-transparent border-line-3 rounded-sm shadow-2xs ' .
                'text-primary focus:ring-0 focus:ring-offset-0 checked:bg-primary-checked ' .
                'checked:border-primary-checked disabled:opacity-50 disabled:pointer-events-none');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes);
        $this->wrapElement($this->newElement('div', ['class' => 'flex items-center']));
        $label->addChild($html)
            ->setClass('text-sm ms-3 text-muted-foreground-1');
        $this->appendSibling($label);
    }
}
