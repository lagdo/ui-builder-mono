<?php

namespace Lagdo\UiBuilder\DaisyUi\Component\Traits;

use Lagdo\UiBuilder\Html\Element\Html;
use Lagdo\UiBuilder\Html\HtmlElement;

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
            $element = $this->newElement('div', ['class' => 'validator-hint'])
                ->addChild(new Html($message));
            $this->appendSibling($element);
            $this->addWrapper($this->newElement('fieldset', ['class' => 'fieldset']));
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
        $this->addWrapper($this->newElement('div', [
            'class' => $valid ? 'tooltip tooltip-success' : 'tooltip tooltip-error',
        ]));
        if ($message !== '') {
            $content = $this->newElement('div', ['class' => 'tooltip-content'])
                ->addChild(new Html($message));
            $this->prependSibling($content);
        }
        return $this;
    }
}
