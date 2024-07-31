<?php

namespace Lagdo\UiBuilder\Bootstrap5\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function rtrim;
use function ltrim;

trait FormTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function form(bool $horizontal = false, bool $wrapped = false, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('form', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('row mb-3');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRowClass(string $class = ''): string
    {
        return rtrim('row ' . ltrim($class));
    }

    /**
     * @inheritDoc
     */
    public function formCol(int $width = 12, ...$arguments): BuilderInterface
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("col-sm-$width");
        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function _formTagClass(string $tagName): string
    {
        if ($tagName === 'label' || $tagName === 'select') {
            return "form-$tagName";
        }
        return 'form-control';
    }
}
