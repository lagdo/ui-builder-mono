<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder;

use Lagdo\HtmlBuilder\Builder\HelperInterface;
use Lagdo\HtmlBuilder\Element\Element;
use Lagdo\HtmlBuilder\HtmlComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\UiBuilder\Builder\Engine\ScopeInterface;
use Closure;

use function trim;

abstract class UiComponent extends HtmlComponent
{
    /**
     * @var ScopeInterface|null
     */
    private ScopeInterface|null $scope = null;

    /**
     * @var array
     */
    private array $classes = []; // The base classes for the component.

    /**
     * @var array
     */
    private array $properties = [];

    /**
     * @var array<Closure>
     */
    private array $beforeBuilders = [];

    /**
     * @var array<Closure>
     */
    private array $afterBuilders = [];

    /**
     * @var array<HtmlElement>
     */
    private array $elementWrappers = [];

    /**
     * @var array<HtmlElement>
     */
    private array $childrenWrappers = [];

    /**
     * @var array<Element>
     */
    private array $prevSiblings = [];

    /**
     * @var array<Element>
     */
    private array $nextSiblings = [];

    /**
     * @param HelperInterface $helper
     * @param string $tagName
     * @param array $arguments
     */
    public function __construct(private HelperInterface $helper,
        string $tagName, array $arguments = [])
    {
        parent::__construct($helper, $tagName, $arguments);

        $this->onCreate();
    }

    /**
     * Called on component creation.
     *
     * @return void
     */
    protected function onCreate(): void
    {}

    /**
     * Called after the parent is set, and the component is about to get built.
     *
     * @return void
     */
    protected function onBuild(): void
    {}

    /**
     * Called for each child after a parent is expanded.
     *
     * @param ScopeInterface $scope
     *
     * @return void
     */
    final public function expanded(ScopeInterface $scope): void
    {
        $this->scope = $scope;
        $this->onBuild();
    }

    /**
     * @return HtmlComponent|null
     */
    final protected function parent(): HtmlComponent|null
    {
        return $this->scope?->parent() ?? null;
    }

    /**
     * @return bool
     */
    final protected function inForm(): bool
    {
        return $this->scope?->inForm() ?? false;
    }

    /**
     * @param Closure $builder
     *
     * @return static
     */
    final protected function beforeBuild(Closure $builder): static
    {
        $this->beforeBuilders[] = $builder;
        return $this;
    }

    /**
     * @param Closure $builder
     *
     * @return static
     */
    final protected function afterBuild(Closure $builder): static
    {
        $this->afterBuilders[] = $builder;
        return $this;
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return HtmlElement
     */
    final protected function newElement(string $tagName, array $arguments = []): HtmlElement
    {
        return new HtmlElement($this->helper, $tagName, $arguments);
    }

    /**
     * @param string $class
     *
     * @return static
     */
    final public function addBaseClass(string $class): static
    {
        $this->classes[trim($class)] = true;
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return static
     */
    final protected function setProp(string $name, mixed $value): static
    {
        $this->properties[$name] = $value;
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    final protected function prop(string $name, mixed $default = null): mixed
    {
        return $this->properties[$name] ?? $default;
    }

    /**
     * @param int $level
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    final protected function parentProp(int $level, string $name, mixed $default = null): mixed
    {
        $parent = $this;
        while ($parent->parent() !== null && $level-- > 0) {
            $parent = $parent->parent();
        }
        return $parent->prop($name, $default);
    }

    /**
     * @return array<HtmlElement>
     */
    final public function prevSiblings(): array
    {
        return $this->prevSiblings;
    }

    /**
     * @return array<HtmlElement>
     */
    final public function nextSiblings(): array
    {
        return $this->nextSiblings;
    }

    /**
     * @param HtmlElement $wrapper
     *
     * @return static
     */
    final protected function wrapElement(HtmlElement $wrapper): static
    {
        $this->elementWrappers[] = $wrapper;
        return $this;
    }

    /**
     * @param HtmlElement $wrapper
     *
     * @return static
     */
    final protected function wrapChildren(HtmlElement $wrapper): static
    {
        $this->childrenWrappers[] = $wrapper;
        return $this;
    }

    /**
     * @param int $index
     *
     * @return HtmlElement|null
     */
    final protected function wrapper(int $index): HtmlElement|null
    {
        return match(true) {
            $index > 0 => $this->elementWrappers[$index - 1] ?? null,
            $index < 0 => $this->childrenWrappers[$index + 1] ?? null,
            default => null,
        };
    }

    /**
     * @param Element $sibling
     *
     * @return static
     */
    final protected function prependSibling(Element $sibling): static
    {
        $this->prevSiblings[] = $sibling;
        return $this;
    }

    /**
     * @param Element $sibling
     *
     * @return static
     */
    final protected function appendSibling(Element $sibling): static
    {
        $this->nextSiblings[] = $sibling;
        return $this;
    }

    /**
     * @param array<Element> $children
     *
     * @return array<HtmlElement>
     */
    final public function build(array $children): array
    {
        foreach ($this->beforeBuilders as $builder) {
            $builder($children);
        }

        $element = $this->element()->addChildren($children);
        // Update the element classes.
        $element->setRawClasses($this->classes + $element->getRawClasses());

        // Nest the component children into their wrappers.
        foreach ($this->childrenWrappers as $wrapper) {
            $element->wrapChildren($wrapper);
        }
        // Append and prepend the component siblings.
        $elements = [
            ...$this->prevSiblings(),
            $element,
            ...$this->nextSiblings(),
        ];
        // Nest the component element into its wrappers.
        foreach ($this->elementWrappers as $wrapper) {
            $wrapper->addChildren($elements);
            $elements = [$wrapper];
        }

        foreach ($this->afterBuilders as $builder) {
            $builder($elements);
        }

        return $elements;
    }
}
