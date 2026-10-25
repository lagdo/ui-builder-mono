<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\PaginationRenderer as Renderer;
use Jaxon\Di\Container;
use Lagdo\UiBuilder\BuilderInterface;

use function Jaxon\jaxon;

// Register the pagination renderer.
jaxon()->di()->set(Renderer::class, fn(Container $di) =>
    new PaginationRenderer($di->g(BuilderInterface::class)));
