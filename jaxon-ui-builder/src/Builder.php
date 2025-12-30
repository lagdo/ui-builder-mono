<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\RendererInterface;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\Base\HtmlElement;
use Lagdo\UiBuilder\Html\HtmlBuilder;

use function class_exists;
use function jaxon;

class Builder
{
    /**
     * The UI builder libraries
     *
     * @var array
     */
    protected static $aLibraries = [
        'bootstrap3' => \Lagdo\UiBuilder\Bootstrap3\Builder::class,
        'bootstrap4' => \Lagdo\UiBuilder\Bootstrap4\Builder::class,
        'bootstrap5' => \Lagdo\UiBuilder\Bootstrap5\Builder::class,
    ];

    /**
     * Get the configured UI builder class name
     *
     * @return string
     */
    protected static function getClass(): string
    {
        return self::$aLibraries[jaxon()->getAppOption('ui.template', '')] ?? '';
    }

    /**
     * Initialize the UI builder library
     *
     * @return void
     */
    public static function register()
    {
        $di = jaxon()->di();
    
        // Register the Jaxon tag builder.
        $di->auto(Factory::class);

        // Register the pagination renderer.
        $di->set(RendererInterface::class, fn($di) =>
            new PaginationRenderer($di->g(BuilderInterface::class)));

        // Register the UI builder.
        $di->set(BuilderInterface::class, function($di) {
            $sLibraryClass = self::getClass();
            if($sLibraryClass === '' || !class_exists($sLibraryClass))
            {
                return null;
            }

            /** @var BuilderInterface */
            $xLibraryInstance = new $sLibraryClass();
            $xFactory = $di->g(Factory::class);

            $xLibraryInstance->registerFactory('jxn', HtmlBuilder::TARGET_BUILDER,
                function(string $tagName, string $method, array $arguments)
                    use($xLibraryInstance, $xFactory) {
                    return $method !== 'jxnHtml' ? '' :
                        $xLibraryInstance->html($xFactory->html($arguments[0]));
                });
            $xLibraryInstance->registerFactory('jxn', HtmlBuilder::TARGET_COMPONENT,
                function(HtmlComponent $component, string $tagName, string $method, array $arguments)
                    use($xFactory) {
                    $xFactory->setAttr($component->element(), $tagName, $arguments);

                    return $component;
                });
            $xLibraryInstance->registerFactory('jxn', HtmlBuilder::TARGET_ELEMENT,
                function(HtmlElement $element, string $tagName, string $method, array $arguments)
                    use($xFactory) {
                    $xFactory->setAttr($element, $tagName, $arguments);

                    return $element;
                });

            return $xLibraryInstance;
        });
    }
}
