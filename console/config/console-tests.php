<?php

declare(strict_types=1);

use yii\log\FileTarget;

$rootDir = dirname(__DIR__, 2);
$params = array_merge(
    require "$rootDir/config/params.php",
    require "$rootDir/config/params-console.php",
);

return [
    'aliases' => [
        '@app' => $rootDir,
    ],
    'basePath' => $rootDir,
    'components' => [
        'log' => [
            'traceLevel' => 'YII_DEBUG' ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@runtime/logs/app.log',
                ],
            ],
        ],
    ],
    'controllerMap' => $params['console.controllerMap'] ?? [],
    'id' => 'console',
    'language' => 'en-US',
    'name' => 'Console Application',
    'params' => $params['console.params'] ?? [],
];
