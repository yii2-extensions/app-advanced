<?php

declare(strict_types=1);

use yii\i18n\PhpMessageSource;
use yii\log\FileTarget;
use yii\symfonymailer\Mailer;
use yii\web\Session;

$rootDir = dirname(__DIR__, 2);
$params = array_merge(
    require "$rootDir/config/params.php",
    require "$rootDir/config/params-backend.php",
);

return [
    'aliases' => [
        '@app' => $rootDir,
        '@bower' => '@app/node_modules',
        '@npm' => '@app/node_modules',
        '@public' => '@app/backend/public',
        '@resource' => '@app/common/src/Framework/resource',
        '@runtime' => '@public/runtime',
    ],
    'basePath' => $rootDir,
    'bootstrap' => [
        'log',
    ],
    'components' => [
        'assetManager' => [
            'basePath' => $params['backend.assetManager.basePath'],
        ],
        'errorHandler' => [
            'errorAction' => $params['backend.errorHandler.errorAction'],
        ],
        'i18n' => [
            'translations' => [
                'backend.advanced' => [
                    'class' => PhpMessageSource::class,
                ],
            ],
        ],
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
        'request' => [
            'cookieValidationKey' => $params['backend.request.cookieValidationKey'],
            'enableCsrfValidation' => $params['backend.request.enableCsrfValidation'],
        ],
        'urlManager' => [
            'enablePrettyUrl' => $params['backend.urlManager.enablePrettyUrl'],
            'showScriptName' => $params['backend.urlManager.showScriptName'],
        ],
    ],
    'container' => [
        'definitions' => [
            Mailer::class => [
                'useFileTransport' => $params['backend.mailer.useFileTransport'],
            ],
        ],
        'singletons' => [
            Session::class => static function (): Session {
                return new Session();
            },
        ],
    ],
    'controllerMap' => $params['backend.controllerMap'] ?? [],
    'id' => 'backend',
    'language' => 'en-US',
    'name' => 'Back End Web Application',
    'params' => $params['backend.params'] ?? [],
    'runtimePath' => "$rootDir/backend/public/runtime",
];
