<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Preline\Component\Mixin;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\HtmlBuilder\HtmlElement;

trait ValidationTrait
{
    /**
     * @param string $name
     * @param array $arguments
     *
     * @return HtmlElement
     */
    abstract protected function newElement(string $name, array $arguments = []): HtmlElement;

    /**
     * @param HtmlElement $sibling
     *
     * @return static
     */
    abstract protected function appendSibling(HtmlElement $sibling): static;

    /**
     * @param HtmlElement $wrapper
     *
     * @return static
     */
    abstract protected function wrapElement(HtmlElement $wrapper): static;

    /**
     * @param bool $valid
     *
     * @return static
     */
    public function feedback(bool $valid): static
    {
        $this->addClass($valid ? 'validator' : 'validator invalid');
        $this->setProp('feedback', $valid);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function help(string $message): static
    {
        $class = match($this->prop('feedback')) {
            true => 'text-sm text-teal-500 mt-2',
            false => 'text-sm text-red-500 mt-2',
            default => 'text-sm',
        };
        $element = $this->newElement('p', ['class' => $class])
            ->addChild(new Html($message));
        $this->appendSibling($element);
        // $this->wrapElement($this->newElement('div', ['class' => 'relative']));
        return $this;
    }

    /**
     * @inheritDoc
     */
    // public function tooltip(string $message): static
    // {
    //     $this->addClass('hs-tooltip-toggle');
    //     if ($message !== '') {
    //         $class = 'hs-tooltip-content hs-tooltip-shown:opacity-100 ' .
    //             'hs-tooltip-shown:visible opacity-0 transition-opacity inline-block ' .
    //             'absolute invisible z-10 py-1 px-2 bg-tooltip border border-tooltip-line ' .
    //             'text-xs font-medium text-tooltip-foreground rounded-md shadow-2xs';
    //         $element = $this->newElement('span', ['class' => $class])
    //             ->addChild(new Html($message));
    //         $this->addChild($element);
    //         $class = 'hs-tooltip [--placement:auto] inline-block';
    //         $this->wrapElement($this->newElement('div', ['class' => $class]));
    //     }
    //     return $this;
    // }
}
