<?php

if (function_exists('Jaxon\jaxon')) {
    $di = Jaxon\jaxon()->di();
    // Register the UI builder
    $di->auto(Lagdo\UiBuilder\Bootstrap5\Builder::class);
    $di->alias('dbadmin_builder_bootstrap5', Lagdo\UiBuilder\Bootstrap5\Builder::class);
}
