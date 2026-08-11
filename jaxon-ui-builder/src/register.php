<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;

use function jaxon;

/**
 * @param string $optionName
 *
 * @return void
 */
function registerUiBuilder(string $optionName): void
{
    $jaxon = jaxon();
    $di = $jaxon->di();

    // Register the pagination renderer.
    $jaxon->di()->set(PaginationRenderer::class, fn() =>
        new PaginationRenderer($di->g(BuilderInterface::class)));
    // Register the UI builder.
    $templateGetter = fn() => $jaxon->getAppOption($optionName, '');
    $di->set(BuilderInterface::class, fn() => (new Factory($templateGetter))->builder());
}
