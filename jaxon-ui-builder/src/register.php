<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\Di\Container;
use Lagdo\UiBuilder\BuilderInterface;

use function jaxon;
use function php_sapi_name;

function register(): void
{
    // Do nothing if running in cli.
    if(php_sapi_name() !== 'cli')
    {
        $di = jaxon()->di();
        // Register the pagination renderer.
        $di->set(PaginationRenderer::class, fn(Container $di) =>
            new PaginationRenderer($di->g(BuilderInterface::class)));
        // Register the UI builder.
        $di->set(BuilderInterface::class, fn() => (new Factory())->builder());
    };
}

register();
