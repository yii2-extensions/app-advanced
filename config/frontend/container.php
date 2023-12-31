<?php

declare(strict_types=1);

use yii\symfonymailer\Mailer;
use yii\web\Session;

/**
 * @var array $params
 */
return [
    'container' => [
        'definitions' => [
            Mailer::class => [
                'useFileTransport' => $params['common.mailer.useFileTransport'],
            ],
        ],
        'singletons' => [
            Session::class => static function (): Session {
                return new Session();
            },
        ],
    ],
];
