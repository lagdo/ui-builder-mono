<?php

namespace Lagdo\UiBuilder\Jaxon;

use Lagdo\UiBuilder\BuilderInterface;
use Lagdo\UiBuilder\BuilderSetup;
use Lagdo\UiBuilder\Scope\UiBuilder;

use function Jaxon\jaxon;

function initBuilder()
{
    $di = jaxon()->di();
    // Register the UI builder.
    $di->set(BuilderInterface::class, function($di) {
        $app = $di->getApp();
        // The 'ui_builder_<name>' key is defined by the corresponding template package.
        return !$app->hasAppOption('ui.template') ? null :
            $di->g('ui_builder_' . $app->getAppOption('ui.template'));
    });
    // Register the Jaxon tag builder.
    $di->auto(JaxonTagBuilder::class);
    // Register the UI builder setup.
    $di->set(BuilderSetup::class, function($di) {
        $jaxonTagBuilder = $di->g(JaxonTagBuilder::class);
        $setup = new BuilderSetup();
        $setup->addTagBuilder('jxn', function(UiBuilder $builder, string $tagName,
            string $method, array $arguments) use($jaxonTagBuilder) {
            $jaxonTagBuilder->tag($builder, $method, $arguments);
        });
        return $setup;
    });
}

initBuilder();
