<?php

namespace Lagdo\UiBuilder\Bootstrap5;

use Lagdo\UiBuilder\AbstractBuilder;
use Lagdo\UiBuilder\Bootstrap5\Component\LabelComponent;
use Lagdo\UiBuilder\Bootstrap5\Component\TableComponent;

class Builder extends AbstractBuilder
{
    use Builder\LayoutTrait;
    use Builder\ButtonTrait;
    use Builder\PanelTrait;
    use Builder\FormTrait;
    use Builder\MenuTrait;
    use Builder\TabTrait;
    use Builder\PaginationTrait;

    /**
     * @inheritDoc
     */
    public function label(...$arguments): LabelComponent
    {
        return $this->createElementOfClass(LabelComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function table(...$arguments): TableComponent
    {
        return $this->createElementOfClass(TableComponent::class, $arguments);
    }
}
