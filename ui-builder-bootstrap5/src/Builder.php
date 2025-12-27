<?php

namespace Lagdo\UiBuilder\Bootstrap5;

use Lagdo\UiBuilder\AbstractBuilder;
use Lagdo\UiBuilder\Bootstrap5\Component\LabelElement;
use Lagdo\UiBuilder\Bootstrap5\Component\TableElement;
use Lagdo\UiBuilder\Component\LabelInterface;
use Lagdo\UiBuilder\Component\TableInterface;

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
    public function label(...$arguments): LabelInterface
    {
        return $this->createElementOfClass(LabelElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function table(...$arguments): TableInterface
    {
        return $this->createElementOfClass(TableElement::class, $arguments);
    }
}
