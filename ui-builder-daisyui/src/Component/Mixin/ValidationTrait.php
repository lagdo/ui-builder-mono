<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\DaisyUi\Component\Mixin;

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
        $element = $this->newElement('div', ['class' => 'validator-hint'])
            ->addChild(new Html($message));
        $this->appendSibling($element);
        $this->wrapElement($this->newElement('fieldset', ['class' => 'fieldset']));
        return $this;
    }

    /**
     * @inheritDoc
     */
    // public function tooltip(string $message): static
    // {
    //     $this->wrapElement($this->newElement('div', [
    //         'class' => $valid ? 'tooltip tooltip-success' : 'tooltip tooltip-error',
    //     ]));
    //     if ($message !== '') {
    //         $content = $this->newElement('div', ['class' => 'tooltip-content'])
    //             ->addChild(new Html($message));
    //         $this->prependSibling($content);
    //     }
    //     return $this;
    // }
}
