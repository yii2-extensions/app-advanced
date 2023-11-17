<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        'common' => [
            '$yii2-bootstrap5',
            '$yii2-debug',
            '$yii2-gii',
            'common/*.php',
        ],
        'backend' => [
            '$common',
            'backend/*.php',
        ],
        'console' => [
            'console/*.php',
        ],
        'frontend' => [
            '$common',
            'frontend/*.php',
        ],
        'params' => 'params.php',
        'params-backend' => [
            '$params',
            'params-backend.php',
        ],
        'params-console' => [
            '$params',
            'params-console.php',
        ],
        'params-frontend' => [
            '$params',
            'params-frontend.php',
        ],
    ],
    'config-plugin-options' => [
        'package-types' => [
            'composer-plugin',
            'library',
            'yii2-extension',
        ],
        'source-directory' => 'config',
    ],
];
