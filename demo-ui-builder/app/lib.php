<?php

use Lagdo\UiBuilder;

if (!function_exists('env'))
{
    function env(string $name, mixed $default = null): mixed
    {
        return $_ENV[$name] ?? $default;
    }
}

function uiLibs(): array
{
    return [
        'bootstrap4' => 'Bootstrap 4',
        'bootstrap5' => 'Bootstrap 5',
        'bulma' => 'Bulma',
        // 'daisyui' => 'Daisy UI',
        // 'flowbite' => 'Flowbite',
        // 'preline' => 'Preline',
        // 'webawesome' => 'WebAwesome',
    ];
}

function uiLib(): string
{
    return $_GET['lib'] ?? 'bootstrap5';
}

function uiLibName(): string
{
    return uiLibs()[uiLib()] ?? 'Unexpected';
}

function builder(): UiBuilder\BuilderInterface
{
    return match(uiLib()) {
        'bootstrap4' => new UiBuilder\Bootstrap4\Builder(),
        'bootstrap5' => new UiBuilder\Bootstrap5\Builder(),
        'bulma' => new UiBuilder\Bulma\Builder(),
        // 'daisyui' => new UiBuilder\DaisyUi\Builder(),
        // 'flowbite' => new UiBuilder\Flowbite\Builder(),
        // 'preline' => new UiBuilder\Preline\Builder(),
        // 'webawesome' => new UiBuilder\WebAwesome\Builder(),
        default => new UiBuilder\Bootstrap5\Builder(),
    };
    // return $builder;
}

function examples(): array
{
    return [
        'buttons' => 'Buttons',
        'badges' => 'Badges',
        'inputs' => 'Inputs',
        'checks' => 'Checks',
        'groups' => 'Groups',
        'alerts' => 'Alerts',
        'cards' => 'Cards',
        'tables' => 'Tables',
        'panels' => 'Panels',
        'pagination' => 'Pagination',
        'tabs' => 'Tabs',
    ];
}

function page(): string
{
    return $_GET['page'] ?? 'intro';
}

function base_dir(): string
{
    return dirname(__DIR__);
}

function log_file(): string
{
    return base_dir() . '/logs/builder';
}

function setup_file(): string
{
    return __DIR__ . '/config/jaxon.php';
}
