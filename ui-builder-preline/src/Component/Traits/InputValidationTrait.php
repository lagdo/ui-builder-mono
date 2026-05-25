<?php

namespace Lagdo\UiBuilder\Preline\Component\Traits;

use Lagdo\UiBuilder\Component\Component;
use Lagdo\UiBuilder\Component\Html\Element;
use Lagdo\UiBuilder\Component\Html\Html;
use Lagdo\UiBuilder\Component\HtmlElement;

trait InputValidationTrait
{
    /**
     * @param string $name
     * @param array $arguments
     *
     * @return HtmlElement
     */
    abstract protected function newElement(string $name, array $arguments = []): HtmlElement;

    /**
     * @param Element|Component $sibling
     *
     * @return static
     */
    abstract protected function appendSibling(Element|Component $sibling): static;

    /**
     * @param HtmlElement $wrapper
     *
     * @return static
     */
    abstract protected function addWrapper(HtmlElement $wrapper): static;

    /**
     * @param bool $valid
     * @param string $message
     *
     * @return static
     */
    public function feedback(bool $valid, string $message = ''): static
    {
        $this->addClass($valid ? 'validator' : 'validator invalid');
        if ($message !== '') {
            $class = $valid ? 'text-sm text-teal-500 mt-2' : 'text-sm text-red-500 mt-2';
            $element = $this->newElement('p', ['class' => $class])
                ->addChild(new Html($message));
            $this->appendSibling($element);
            // $this->addWrapper($this->newElement('div', ['class' => 'relative']));
        }
        return $this;
    }

    /**
     * @param bool $valid
     * @param string $message
     *
     * @return static
     */
    public function tooltip(bool $valid, string $message = ''): static
    {
        $this->addClass('hs-tooltip-toggle');
        if ($message !== '') {
            $class = 'hs-tooltip-content hs-tooltip-shown:opacity-100 ' .
                'hs-tooltip-shown:visible opacity-0 transition-opacity inline-block ' .
                'absolute invisible z-10 py-1 px-2 bg-tooltip border border-tooltip-line ' .
                'text-xs font-medium text-tooltip-foreground rounded-md shadow-2xs';
            $element = $this->newElement('span', ['class' => $class])
                ->addChild(new Html($message));
            $this->addChild($element);
            $class = 'hs-tooltip [--placement:auto] inline-block';
            $this->addWrapper($this->newElement('div', ['class' => $class]));
        }
        return $this;
    }
}
