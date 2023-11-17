<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'yii2-bootstrap5' => [
            'yii2-extensions/bootstrap5' => [
                'config/extension.php',
            ],
        ],
        'yii2-debug' => [
            'yii2-extensions/debug' => [
                'config/extension.php',
            ],
        ],
        'yii2-gii' => [
            'yii2-extensions/gii' => [
                'config/extension.php',
            ],
        ],
        'common' => [
            '/' => [
                '$yii2-bootstrap5',
                '$yii2-debug',
                '$yii2-gii',
                'common/*.php',
            ],
        ],
        'backend' => [
            '/' => [
                '$common',
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
                '$common',
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
