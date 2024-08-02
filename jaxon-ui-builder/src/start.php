<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\Html\UiBuilder;

use function class_exists;
use function Jaxon\jaxon;

function getUiBuilderClass(): string
{
    $aLibraries = [
        'bootstrap3' => \Lagdo\UiBuilder\Bootstrap3\Builder::class,
        'bootstrap4' => \Lagdo\UiBuilder\Bootstrap4\Builder::class,
        'bootstrap5' => \Lagdo\UiBuilder\Bootstrap5\Builder::class,
    ];
    return $aLibraries[jaxon()->app()->getAppOption('ui.template', '')] ?? '';
}

function uiBuilderDefined(): bool
{
    $sLibraryClass = getUiBuilderClass();
    return $sLibraryClass !== '' && class_exists($sLibraryClass);
}

function initBuilder()
{
    $di = jaxon()->di();

    // Register the Jaxon tag builder.
    $di->auto(JaxonTagBuilder::class);

    // Register the UI builder, which is not a singleton.
    $di->set(BuilderInterface::class, function($di) {
        if(!uiBuilderDefined())
        {
            return null;
        }

        $sLibraryClass = getUiBuilderClass();
        $xLibraryInstance = new $sLibraryClass();
        $jaxonTagBuilder = $di->g(JaxonTagBuilder::class);
        $xLibraryInstance->addTagBuilder('jxn', function(UiBuilder $builder, string $tagName,
            string $method, array $arguments) use($jaxonTagBuilder) {
            $jaxonTagBuilder->tag($builder, $method, $arguments);
        });

        return $xLibraryInstance;
    }, false);
}

function newUiBuilder(): BuilderInterface
{
    return jaxon()->di()->g(BuilderInterface::class);
}

initBuilder();
