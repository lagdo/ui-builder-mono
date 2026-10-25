<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\BreadcrumbItemComponent as BaseComponent;

class BreadcrumbItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'a';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->newElement('li');
        if ($this->prop('active', false)) {
            $wrapper->addClass('is-active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->setTag('span');
        }
        $this->wrapElement($wrapper);
    }
}
