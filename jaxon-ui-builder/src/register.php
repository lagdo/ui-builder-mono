<?php

namespace Lagdo\UiBuilder\Jaxon;

function register(): void
{
    // Do nothing if running in cli.
    if(php_sapi_name() !== 'cli')
    {
        Builder::register();
    };
}

register();
