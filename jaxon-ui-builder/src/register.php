<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;

use function jaxon;

/**
 * @param string $template
 *
 * @return void
 */
function registerUiBuilder(string $template): void
{
    $jaxon = jaxon();
    $di = $jaxon->di();

    // Register the pagination renderer.
    $di->set(PaginationRenderer::class, fn() =>
        new PaginationRenderer($di->g(BuilderInterface::class)));
    // Register the UI builder.
    $di->set(BuilderInterface::class, fn() => (new Factory($template))->builder());
}
