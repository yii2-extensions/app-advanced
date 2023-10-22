<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'yii2-debug' => [
            'yii2-extensions/debug' => [
                'config/modules.php',
            ],
        ],
        'yii2-gii' => [
            'yii2-extensions/gii' => [
                'config/modules.php',
            ],
        ],
        'backend' => [
            '/' => [
                '$yii2-debug',
                '$yii2-gii',
                'backend/*.php',
            ],
        ],
        'console' => [
            '/' => [
                'console/*.php',
            ],
        ],
        'frontend' => [
            '/' => [
                '$yii2-debug',
                '$yii2-gii',
                'frontend/*.php',
            ],
        ],
        'params' => [
            '/' => [
                'params.php',
            ],
        ],
        'params-backend' => [
            '/' => [
                '$params',
                'params-backend.php',
            ],
        ],
        'params-console' => [
            '/' => [
                '$params',
                'params-console.php',
            ],
        ],
        'params-frontend' => [
            '/' => [
                '$params',
                'params-frontend.php',
            ],
        ],
    ],
];
