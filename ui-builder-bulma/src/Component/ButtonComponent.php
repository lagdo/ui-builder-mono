<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('button')
            ->setAttribute('type', 'button');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        if ($visual !== null) {
            $class = match($visual) {
                VisualEnum::SECONDARY => 'is-dark',
                VisualEnum::ERROR => 'is-danger',
                default => 'is-' . $visual->value,
            };
            $this->addBaseClass($class);
        }

        if ($this->prop('outline', false)) {
            $this->addBaseClass('is-outlined');
        }

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->addBaseClass('is-large');
            break;
        case SizeEnum::SMALL:
            $this->addBaseClass('is-small');
            break;
        default:
        }

        if ($this->prop('fullWidth', false)) {
            $this->addBaseClass('is-fullwidth');
        }

        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('p', ['class' => 'control']));
        }
    }
}
