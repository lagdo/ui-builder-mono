<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;

use function jaxon;
use function php_sapi_name;

function registerUiBuilder(): void
{
    $jaxon = jaxon();
    $di = $jaxon->di();

    // Register the pagination renderer.
    $jaxon->di()->set(PaginationRenderer::class, fn() =>
        new PaginationRenderer($di->g(BuilderInterface::class)));
    // Register the UI builder.
    $templateGetter = fn() => $jaxon->getAppOption('ui.template', '');
    $di->set(BuilderInterface::class, fn() => (new Factory($templateGetter))->builder());
}

function register(): void
{
    // Do nothing if running in cli.
    if(php_sapi_name() !== 'cli')
    {
        registerUiBuilder();
    }
}

register();
