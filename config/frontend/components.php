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
            'basePath' => $params['frontend.assetManager.basePath'],
        ],
        'cache' => [
            'class' => FileCache::class,
        ],
        'errorHandler' => [
            'errorAction' => $params['frontend.errorHandler.errorAction'],
        ],
        'i18n' => [
            'translations' => [
                'frontend.advanced' => [
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
                    'logFile' => '@runtime/logs/frontend.log',
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
];
