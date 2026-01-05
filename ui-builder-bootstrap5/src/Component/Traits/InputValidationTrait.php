<?php

namespace Lagdo\UiBuilder\Bootstrap5\Component\Traits;

use Lagdo\UiBuilder\Component\Html\Html;

trait InputValidationTrait
{
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
            $element = $this->addSiblingNext('div',  [
                'class' => $valid ? 'valid-feedback' : 'invalid-feedback',
            ]);
            $element->addChild(new Html($message));
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
            $element = $this->addSiblingNext('div',  [
                'class' => $valid ? 'valid-tooltip' : 'invalid-tooltip',
            ]);
            $element->addChild(new Html($message));
        }
        return $this;
    }
}
