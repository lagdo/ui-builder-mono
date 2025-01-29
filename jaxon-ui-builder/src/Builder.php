<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\RendererInterface;
use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Html\UiBuilder;

use function class_exists;
use function Jaxon\jaxon;

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
        return self::$aLibraries[jaxon()->app()->getOption('ui.template', '')] ?? '';
    }

    /**
     * Check if the UI builder is well-defined
     * @return bool
     */
    public static function isDefined(): bool
    {
        $sLibraryClass = self::getClass();
        return $sLibraryClass !== '' && class_exists($sLibraryClass);
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
        $di->set(RendererInterface::class, function() {
            return new PaginationRenderer();
        });

        // Register the UI builder, which is not a singleton.
        $di->set(BuilderInterface::class, function($di) {
            if(!self::isDefined())
            {
                return null;
            }

            $sLibraryClass = self::getClass();
            $xLibraryInstance = new $sLibraryClass();
            $jaxonTagBuilder = $di->g(TagBuilder::class);
            $xLibraryInstance->addTagBuilder('jxn', function(UiBuilder $builder, string $tagName,
                string $method, array $arguments) use($jaxonTagBuilder) {
                $jaxonTagBuilder->tag($builder, $method, $arguments);
            });
            return $xLibraryInstance;
        }, false);
    }
    
    /**
     * Return a new instance of the UI builder
     *
     * @return BuilderInterface
     */
    public static function new(): BuilderInterface
    {
        return jaxon()->di()->g(BuilderInterface::class);
    }
}
