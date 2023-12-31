<?php

declare(strict_types=1);

use Console\UseCase\Hello\HelloController;
use yii\console\controllers\ServeController;

$rootDir = dirname(__DIR__);

return [
    'console.aliases' => [
        '@app' => $rootDir,
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'console.id' => 'console.basic',
    'console.controllerMap' => [
        'hello' => HelloController::class,
        'serve' => [
            'class' => ServeController::class,
            'docroot' => "$rootDir/public",
        ],
    ],
    'console.params' => [],
    'console.root.dir' => $rootDir,
];
