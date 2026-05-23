<?php

namespace Lagdo\UiBuilder\Flowbite\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @var string
     */
    public string $style = '';

    /**
     * @var bool
     */
    public bool $vertical = false;

    /**
     * @var bool
     */
    public bool $fullWidth = false;

    /**
     * @var string
     */
    private string $justifyClass = '';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('role', 'tablist');
    }

    /**
     * @return void
     */
    private function setProperties(): void
    {
        if ($this->element()->hasAttribute('id')) {
            $id = $this->element()->getAttribute('data-tabs-toggle') . '-tabs';
            $this->element()->setAttribute('id', $id);
        }
        if ($this->justifyClass !== '') {
            $this->element()->addClass($this->justifyClass);
        }
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->vertical) {
            // Todo: move this wrapper to the TabComponent class.
            $this->addWrapper($this->newElement('div', ['class' => 'md:flex']));
            $this->element()->addClass('flex-column space-y space-y-4 ' .
                'text-sm font-medium text-body md:me-4 mb-4 md:mb-0');
            $this->setProperties();
            return;
        }

        $class = match($this->style) {
            'lines' => 'text-sm font-medium text-center text-body border-b border-default',
            'pills' => 'flex flex-wrap text-sm font-medium text-center text-body',
            default => 'flex flex-wrap text-sm font-medium text-center text-body border-b border-default',
        };
        $this->element()->addClass($class);
        $this->setProperties();
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        $this->vertical = true;
        return $this;
    }

    /**
     * @return static
     */
    public function fill(): static
    {
        $this->fullWidth = false;
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        $this->justifyClass = "justify-$justify";
        return $this;
    }

    /**
     * @param string $content
     *
     * @return static
     */
    public function content(string $content): static
    {
        $this->element()->setAttribute('data-tabs-toggle', "#$content");
        return $this;
    }
}
