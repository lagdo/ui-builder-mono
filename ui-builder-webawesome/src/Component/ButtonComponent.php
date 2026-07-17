<?php

namespace Lagdo\UiBuilder\WebAwesome\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Attr\VariantEnum;
use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\ButtonComponent as BaseComponent;

class ButtonComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'wa-button';

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $size = $this->prop('size', SizeEnum::DEFAULT);
        $this->element()->setAttribute('size', match($size) {
            SizeEnum::LARGE => 'l',
            SizeEnum::SMALL => 's',
            default => 'm',
        });

        $variant = $this->prop('variant', VariantEnum::DEFAULT);
        $this->element()->setAttribute('appearance', match($variant) {
            VariantEnum::OUTLINE => 'outlined',
            VariantEnum::LIGHT => 'filled',
            VariantEnum::DARK => 'neutral',
            VariantEnum::GHOST => 'plain',
            default => 'accent',
        });

        $visual = $this->prop('visual', VisualEnum::DEFAULT);
        $this->element()->setAttribute('variant', match($visual) {
            VisualEnum::PRIMARY => 'brand',
            VisualEnum::SECONDARY => 'neutral',
            VisualEnum::INFO => 'brand', // Same as primary.
            VisualEnum::SUCCESS => 'success',
            VisualEnum::WARNING => 'warning',
            VisualEnum::DANGER => 'danger',
            default => 'neutral',
        });
    }

    /**
     * @inheritDoc
     */
    public function fullWidth(): static
    {
        $this->element()->setStyle('width: 100%;');
        return $this;
    }
}
