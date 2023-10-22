<?php

declare(strict_types=1);

use FrontEnd\Framework\EventHandler\ContactEventHandler;
use yii\i18n\PhpMessageSource;
use yii\log\FileTarget;
use yii\symfonymailer\Mailer;
use yii\web\Session;

$rootDir = dirname(__DIR__, 2);
$params = array_merge(
    require "$rootDir/config/params.php",
    require "$rootDir/config/params-frontend.php",
);

return [
    'aliases' => [
        '@app' => $rootDir,
        '@bower' => '@app/node_modules',
        '@npm' => '@app/node_modules',
        '@public' => '@app/frontend/public',
        '@resource' => '@app/frontend/src/Framework/resource',
        '@runtime' => '@public/runtime',
    ],
    'basePath' => $rootDir,
    'bootstrap' => [
        ContactEventHandler::class,
        'log',
    ],
    'components' => [
        'assetManager' => [
            'basePath' => $params['frontend.assetManager.basePath'],
        ],
        'errorHandler' => [
            'errorAction' => $params['frontend.errorHandler.errorAction'],
        ],
        'i18n' => [
            'translations' => [
                'frontend.avanced' => [
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
            'cookieValidationKey' => $params['frontend.request.cookieValidationKey'],
            'enableCsrfValidation' => $params['frontend.request.enableCsrfValidation'],
        ],
        'urlManager' => [
            'enablePrettyUrl' => $params['frontend.urlManager.enablePrettyUrl'],
            'showScriptName' => $params['frontend.urlManager.showScriptName'],
        ],
    ],
    'container' => [
        'definitions' => [
            Mailer::class => [
                'useFileTransport' => $params['frontend.mailer.useFileTransport'],
            ],
        ],
        'singletons' => [
            Session::class => static function (): Session {
                return new Session();
            },
        ],
    ],
    'controllerMap' => $params['frontend.controllerMap'] ?? [],
    'id' => 'frontend',
    'language' => 'en-US',
    'name' => 'My Project Basic',
    'params' => $params['frontend.params'] ?? [],
    'runtimePath' => "$rootDir/frontend/public/runtime",
];
