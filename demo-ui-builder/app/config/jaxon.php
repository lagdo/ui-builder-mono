<?php

require_once dirname(__DIR__) . '/lib.php';

$baseDir = base_dir();

return [
    'app' => [
        'metadata' => [
            'cache' => [
                'enabled' => false,
                'dir' => "$baseDir/cache/attributes",
            ],
        ],
        // 'views' => [
        //     'components' => [
        //         'directory' => "$baseDir/views/components",
        //         'extension' => '.php',
        //         'renderer' => 'jaxon',
        //     ],
        // ],
    ],
    'lib' => [
        'core' => [
            'debug' => [
                'on' => false,
                'verbose' => false,
            ],
            'prefix' => [
                'class' => '',
            ],
        ],
        'js' => [
            'lib' => [],
        ],
    ],
];
