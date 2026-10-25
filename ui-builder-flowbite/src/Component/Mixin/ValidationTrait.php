<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Flowbite\Component\Mixin;

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
     * @param bool $valid
     *
     * @return static
     */
    public function feedback(bool $valid): static
    {
        $class = $valid ?
            'bg-success-soft border-success-subtle text-fg-success-strong focus:ring-success ' .
                'focus:border-success placeholder:text-fg-success-strong' :
            'bg-danger-soft border-danger-subtle text-fg-danger-strong focus:ring-danger ' .
                'focus:border-danger placeholder:text-fg-danger-strong';
        $this->addClass($class);
        $this->setProp('feedback', $valid);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function help(string $message): static
    {
        $class = match($this->prop('feedback')) {
            true => 'text-sm text-fg-success-strong',
            false => 'text-sm text-fg-danger-strong',
            default => 'text-sm',
        };
        $element = $this->newElement('p', ['class' => $class])
            ->addChild(new Html($message));
        $this->appendSibling($element);
        return $this;
    }

    /**
     * @inheritDoc
     */
    // public function tooltip(string $message): static
    // {
    //     $tooltipId = 'tooltip-' . bin2hex(random_bytes(5));
    //     $this->setAttributes([
    //         'data-tooltip-target' => $tooltipId,
    //         'data-tooltip-style' => $valid ? 'light' : 'dark',
    //     ]);
    //     if ($message !== '') {
    //         $prefix = 'absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium';
    //         $class = $valid ?
    //             'text-heading bg-neutral-primary-medium border border-default ' .
    //                 'rounded-base shadow-xs opacity-0 tooltip' :
    //             'text-white bg-dark rounded-base shadow-xs opacity-0 tooltip';
    //         $element = $this->newElement('div', [
    //             'id' => $tooltipId,
    //             'role' => 'tooltip',
    //             'class' => "$prefix $class",
    //         ])->addChild(new Html($message));
    //         $this->appendSibling($element);
    //     }
    //     return $this;
    // }
}
