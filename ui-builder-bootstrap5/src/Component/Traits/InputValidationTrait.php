<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component\Traits;

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
     * @param bool $valid
     * @param string $message
     *
     * @return static
     */
    public function feedback(bool $valid, string $message = ''): static
    {
        $this->addClass($valid ? 'is-valid' : 'is-invalid');
        if ($message !== '') {
            $element = $this->newElement('div', [
                'class' => $valid ? 'valid-feedback' : 'invalid-feedback',
            ]);
            $element->addChild(new Html($message));
            $this->appendSibling($element);
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
        $this->addClass($valid ? 'is-valid' : 'is-invalid');
        if ($message !== '') {
            $element = $this->newElement('div', [
                'class' => $valid ? 'valid-tooltip' : 'invalid-tooltip',
            ]);
            $element->addChild(new Html($message));
            $this->appendSibling($element);
        }
        return $this;
    }
}
