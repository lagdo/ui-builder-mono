<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\BreadcrumbItemComponent as BaseComponent;

class BreadcrumbItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-breadcrumb-item';

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        // Nothing to do. The last item is already formatted.
        return $this;
    }
}
