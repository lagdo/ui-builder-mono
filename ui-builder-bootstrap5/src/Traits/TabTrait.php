<?php

namespace Lagdo\UiBuilder\Bootstrap5\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait TabTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function tabNav(string $id = '', ...$arguments): BuilderInterface
    {
        $this->builder->createScope('ul', [$id, ...$arguments]);
        $this->builder->prependClass('nav nav-pills mb-3');
        if (($id)) {
            $this->builder->setAttribute('id', $id);
            $this->options['tab-nav-id'] = $id;
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(string $target, bool $active = false, ...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'nav-item', 'role' => 'presentation']);
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass($active ? 'nav-link active' : 'nav-link');
        $this->builder->setAttributes(['id' => "$target-tab", 'type' => 'button', 'role' => 'tab',
            'aria-selected' => $active ? 'true' : 'false', 'data-bs-toggle' => 'tab', 'data-bs-target' => "#$target"]);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('tab-content');
        if (isset($this->options['tab-nav-id'])) {
            $this->builder->setAttribute('id', $this->options['tab-nav-id'] . 'Content');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($active ? 'tab-pane fade show active' : 'tab-pane fade');
        $this->builder->setAttribute('id', $id);
        return $this;
    }
}
