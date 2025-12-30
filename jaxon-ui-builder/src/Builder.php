<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\RendererInterface;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\Base\HtmlElement;
use Lagdo\UiBuilder\Html\HtmlBuilder;
use LogicException;

use function class_exists;
use function jaxon;

class Builder
{
    /**
     * @var Factory
     */
    private static Factory $xFactory;

    /**
     * Get the builder instance depending on the Jaxon library config.
     *
     * @return BuilderInterface|null
     */
    protected static function createBuilder(): BuilderInterface|null
    {
        return match(jaxon()->getAppOption('ui.template', '')) {
            'bootstrap3' => class_exists(\Lagdo\UiBuilder\Bootstrap3\Builder::class) ?
                new \Lagdo\UiBuilder\Bootstrap3\Builder() : null,
            'bootstrap4' => class_exists(\Lagdo\UiBuilder\Bootstrap4\Builder::class) ?
                new \Lagdo\UiBuilder\Bootstrap4\Builder() : null,
            'bootstrap5' => class_exists(\Lagdo\UiBuilder\Bootstrap5\Builder::class) ?
                new \Lagdo\UiBuilder\Bootstrap5\Builder() : null,
            default => null,
        };
    }

    /**
     * Initialize the UI builder library
     *
     * @return void
     */
    public static function register()
    {
        $di = jaxon()->di();

        // Register the pagination renderer.
        $di->set(RendererInterface::class, fn($di) =>
            new PaginationRenderer($di->g(BuilderInterface::class)));

        // Register the UI builder.
        $di->set(BuilderInterface::class, function($di) {
            if(($xBuilder = self::createBuilder()) === null)
            {
                return null;
            }

            // Create the factory instance.
            self::$xFactory = new Factory();

            // This factory adds the Jaxon jxnHtml() function to the builder interface.
            $xBuilder->registerFactory('jxn', HtmlBuilder::TARGET_BUILDER,
                function(string $tagName, string $method, array $arguments) use($xBuilder) {
                    if ($method === 'jxnHtml') {
                        return $xBuilder->html(self::$xFactory->html($arguments[0]));
                    }

                    throw new LogicException("No \"{$method}()\" method defined in the HTML UI builder.");
                });
            // This factory adds functions to set Jaxon attributes on HTML components.
            $xBuilder->registerFactory('jxn', HtmlBuilder::TARGET_COMPONENT,
                function(HtmlComponent $component, string $tagName, string $method, array $arguments) {
                    if (self::$xFactory->setAttr($component->element(), $tagName, $arguments)) {
                        return $component;
                    }

                    throw new LogicException("No \"{$method}()\" method defined in the HTML component builder.");
                });
            // This factory adds functions to set Jaxon attributes on HTML elements.
            $xBuilder->registerFactory('jxn', HtmlBuilder::TARGET_ELEMENT,
                function(HtmlElement $element, string $tagName, string $method, array $arguments) {
                    if (self::$xFactory->setAttr($element, $tagName, $arguments)) {
                        return $element;
                    }

                    throw new LogicException("No \"{$method}()\" method defined in the HTML element builder.");
                });

            return $xBuilder;
        });
    }
}
