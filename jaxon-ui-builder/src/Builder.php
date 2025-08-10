<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\RendererInterface;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Builder\Html\Element;
use LogicException;

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
        $di->auto(TagBuilder::class);

        // Register the pagination renderer.
        $di->set(RendererInterface::class, function($di) {
            return new PaginationRenderer($di->g(BuilderInterface::class));
        });

        // Register the UI builder.
        $di->set(BuilderInterface::class, function($di) {
            $sLibraryClass = self::getClass();
            if($sLibraryClass === '' || !class_exists($sLibraryClass))
            {
                return null;
            }

            $xLibraryInstance = new $sLibraryClass();
            $xTagBuilder = $di->g(TagBuilder::class);
            $xLibraryInstance->addElementBuilder('jxn', function(Element|null $element,
                string $tagName, string $method, array $arguments) use($xTagBuilder) {
                if ($method === 'jxnHtml') {
                    return $xTagBuilder->html($arguments[0]);
                }

                if ($element === null) {
                    throw new LogicException('Attributes can be set for elements only');
                }

                $xTagBuilder->tag($element, $method, $arguments);
                return $element;
            });
            return $xLibraryInstance;
        });
    }
}
