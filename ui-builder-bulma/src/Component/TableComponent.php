<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('table');
    }

    /**
     * @return static
     */
    public function responsive(): static
    {
        $this->addWrapper($this->newElement('div', ['class' => 'table-container']));
        return $this;
    }

    /**
     * @return static
     */
    public function stripe(): static
    {
        $this->element()->addClass('is-striped');
        return $this;
    }

    /**
     * @return static
     */
    public function border(): static
    {
        $this->element()->addClass('is-bordered');
        return $this;
    }

    /**
     * @return static
     */
    public function hover(): static
    {
        $this->element()->addClass('is-hoverable');
        return $this;
    }
}
