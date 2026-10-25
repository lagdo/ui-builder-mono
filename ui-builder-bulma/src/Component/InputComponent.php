<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bulma\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Text;

class InputComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->element()->getAttribute('type') === 'hidden') {
            return;
        }

        $this->addBaseClass('input')
            ->wrapElement($this->newElement('div', ['class' => 'control']));
        $message = $this->prop('message');
        if ($message !== null) {
            $feedback = $this->prop('feedback');
            $class = match($feedback) {
                true => 'help is-success',
                false => 'help is-danger',
                default => 'help',
            };
            $message = $this->newElement('p', ['class' => $class])
                ->addChild(new Text($message));
            $wrapper = $this->newElement('div')->setGhost(true);
            $this->wrapElement($wrapper);
            $this->afterBuild(fn() => $wrapper->addChild($message));
        }
    }
}
