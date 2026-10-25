<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class RadioComponent extends BaseComponent
{
    // use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->setAttribute('type', 'radio')
            ->addBaseClass('shrink-0 size-4 bg-transparent border-line-3 rounded-full shadow-2xs ' .
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
