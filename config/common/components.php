<?php

declare(strict_types=1);

use yii\symfonymailer\Mailer;

/**
 * @var array $params
 */
return [
    'components' => [
        'mailer' => [
            'class' => Mailer::class,
            'viewPath' => '@common/mailer',
            'useFileTransport' => $params['common.mailer.useFileTransport'],
            'transport' => [
                'scheme' => 'smtp',
                'host' => 'smtp.gmail.com',
                'username' => '',
                'password' => '',
                'port' => 587,
                'options' => ['ssl' => true],
            ],
        ],
    ],
];
