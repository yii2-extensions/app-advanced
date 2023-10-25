<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        'common' => 'common/*.php',
        'backend' => [
            '$common',
            '$yii2-debug',
            '$yii2-gii',
            'backend/*.php',
        ],
        'console' => [
            'console/*.php',
        ],
        'frontend' => [
            '$common',
            '$yii2-debug',
            '$yii2-gii',
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
        'source-directory' => 'config',
    ],
];
