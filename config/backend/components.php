<?php

declare(strict_types=1);

use yii\caching\FileCache;
use yii\i18n\PhpMessageSource;
use yii\log\FileTarget;

/**
 * @var array $params
 */
return [
    'components' => [
        'assetManager' => [
            'basePath' => $params['backend.assetManager.basePath'],
        ],
        'cache' => [
            'class' => FileCache::class,
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
                    'logFile' => '@runtime/logs/backend.log',
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
];
