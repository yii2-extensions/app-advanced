<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        'frontend' => [
            '$yii2-debug',
            '$yii2-gii',
            'frontend/*.php',
        ],
        'params' => 'params.php',
        'params-frontend' => [
            '$params',
            'params-frontend.php',
        ],
    ],
    'config-plugin-options' => [
        'source-directory' => 'config',
    ],
];
