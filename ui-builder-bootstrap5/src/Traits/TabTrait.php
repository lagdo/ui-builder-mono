<?php

namespace Lagdo\UiBuilder\Bootstrap5\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

trait TabTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function tabNav(string $id = ''): self
    {
        $this->builder->createScope('ul', func_get_args());
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
    public function tabNavItem(string $target, bool $active = false): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        array_shift($arguments);
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
    public function tabContent(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('tab-content');
        if (isset($this->options['tab-nav-id'])) {
            $this->builder->setAttribute('id', $this->options['tab-nav-id'] . 'Content');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        array_shift($arguments);
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($active ? 'tab-pane fade show active' : 'tab-pane fade');
        $this->builder->setAttribute('id', $id);
        return $this;
    }
}
