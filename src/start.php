<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\BuilderSetup;

use function Jaxon\jaxon;

function initBuilder()
{
    $di = jaxon()->di();
    $di->auto(JaxonTagBuilder::class);
    // Register the UI builder setup
    $di->set(BuilderSetup::class, function($di) {
        $jaxonTagBuilder = $di->g(JaxonTagBuilder::class);
        $setup = new BuilderSetup();
        $setup->addTagBuilder('jxn', function(BuilderInterface $builder, string $tagName,
            string $method, array $arguments) use($jaxonTagBuilder) {
            $jaxonTagBuilder->tag($builder, $method, $arguments);
        });
        return $setup;
    });
}

initBuilder();
