<?php

require_once __DIR__ . '/lib.php';
require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Lagdo\Facades\ContainerWrapper;
use Lagdo\Facades\Logger;

ContainerWrapper::registerLocalServices([
    'filename' => log_file(),
]);

$jaxon = jaxon();
$jaxon->di()->setLogger(Logger::instance());

// Register the view templates.
$layoutDir = base_dir() . '/views/layout';
$jaxon->template()->addNamespace('layout', $layoutDir, '.php');
$demoDir = base_dir() . '/views/demo';
$jaxon->template()->addNamespace('demo', $demoDir, '.php');

$jaxon->app()->setup(setup_file());
