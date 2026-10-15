<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component\Mixin;

trait ValidationTrait
{
    /**
     * @inheritDoc
     */
    public function feedback(bool $valid): static
    {
        $this->addClass($valid ? 'is-success' : 'is-danger');
        $this->setProp('feedback', $valid);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function help(string $message): static
    {
        $this->setProp('message', $message);
        return $this;
    }
}
