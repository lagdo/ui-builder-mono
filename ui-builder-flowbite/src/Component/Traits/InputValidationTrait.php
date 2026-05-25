<?php

namespace Lagdo\UiBuilder\Flowbite\Component\Traits;

use Lagdo\UiBuilder\Component\Component;
use Lagdo\UiBuilder\Component\Html\Element;
use Lagdo\UiBuilder\Component\Html\Html;
use Lagdo\UiBuilder\Component\HtmlElement;

use function bin2hex;
use function random_bytes;

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
        $class = !$valid ?
            'bg-danger-soft border-danger-subtle text-fg-danger-strong focus:ring-danger ' .
                'focus:border-danger placeholder:text-fg-danger-strong' :
            'bg-success-soft border-success-subtle text-fg-success-strong focus:ring-success ' .
                'focus:border-success placeholder:text-fg-success-strong';
        $this->addClass($class);
        if ($message !== '') {
            $class = $valid ? 'mt-2.5 text-sm text-fg-success-strong' :
                'mt-2.5 text-sm text-fg-danger-strong';
            $element = $this->newElement('p', ['class' => $class])
                ->addChild(new Html($message));
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
        $tooltipId = 'tooltip-' . bin2hex(random_bytes(5));
        $this->setAttributes([
            'data-tooltip-target' => $tooltipId,
            'data-tooltip-style' => $valid ? 'light' : 'dark',
        ]);
        if ($message !== '') {
            $prefix = 'absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium';
            $class = $valid ?
                'text-heading bg-neutral-primary-medium border border-default ' .
                    'rounded-base shadow-xs opacity-0 tooltip' :
                'text-white bg-dark rounded-base shadow-xs opacity-0 tooltip';
            $element = $this->newElement('div', [
                'id' => $tooltipId,
                'role' => 'tooltip',
                'class' => "$prefix $class",
            ])->addChild(new Html($message));
            $this->appendSibling($element);
        }
        return $this;
    }
}
