<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\Di\Container;
use Lagdo\UiBuilder\AbstractBuilder;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Bootstrap3;
use Lagdo\UiBuilder\Bootstrap4;
use Lagdo\UiBuilder\Bootstrap5;
use Lagdo\UiBuilder\DaisyUi;
use Lagdo\UiBuilder\Flowbite;
use Lagdo\UiBuilder\Preline;
use Lagdo\UiBuilder\Component\HtmlComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
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
     * @param string $class
     *
     * @return BuilderInterface|null
     */
    private static function make(string $class):BuilderInterface|null
    {
        return class_exists($class) ? new $class : null;
    }

    /**
     * Get the builder instance depending on the Jaxon library config.
     *
     * @return BuilderInterface|null
     */
    protected static function createBuilder(): BuilderInterface|null
    {
        return match(jaxon()->getAppOption('ui.template', '')) {
            'bootstrap3' => self::make(Bootstrap3\Builder::class),
            'bootstrap4' => self::make(Bootstrap4\Builder::class),
            'bootstrap5' => self::make(Bootstrap5\Builder::class),
            'daisyui' => self::make(DaisyUi\Builder::class),
            'flowbite' => self::make(Flowbite\Builder::class),
            'preline' => self::make(Preline\Builder::class),
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
        $di->set(PaginationRenderer::class, fn(Container $di) =>
            new PaginationRenderer($di->g(BuilderInterface::class)));

        // Register the UI builder.
        $di->set(BuilderInterface::class, function(Container $di) {
            if (($xBuilder = self::createBuilder()) === null) {
                return null;
            }

            // Create the factory instance.
            self::$xFactory = new Factory();

            // This factory adds the Jaxon jxnHtml() function to the builder interface.
            $xBuilder->registerHelper('jxn', AbstractBuilder::TARGET_BUILDER,
                function(string $tagName, string $method, array $arguments) use($xBuilder) {
                    if ($method === 'jxnHtml') {
                        return $xBuilder->html(self::$xFactory->html($arguments[0]));
                    }

                    throw new LogicException("Call to undefined method \"{$method}()\" in the HTML UI builder.");
                });
            // This factory adds functions to set Jaxon attributes on HTML components.
            $xBuilder->registerHelper('jxn', AbstractBuilder::TARGET_COMPONENT,
                function(HtmlComponent $component, string $tagName, string $method, array $arguments) {
                    if (self::$xFactory->setAttr($component->element(), $tagName, $arguments)) {
                        return $component;
                    }

                    throw new LogicException("Call to undefined method \"{$method}()\" in the HTML component.");
                });
            // This factory adds functions to set Jaxon attributes on HTML elements.
            $xBuilder->registerHelper('jxn', AbstractBuilder::TARGET_ELEMENT,
                function(HtmlElement $element, string $tagName, string $method, array $arguments) {
                    if (self::$xFactory->setAttr($element, $tagName, $arguments)) {
                        return $element;
                    }

                    throw new LogicException("Call to undefined method \"{$method}()\" in the HTML element.");
                });

            return $xBuilder;
        });
    }
}
