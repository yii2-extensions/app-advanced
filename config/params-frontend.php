<?php

declare(strict_types=1);

use FrontEnd\UseCase\About\AboutController;
use FrontEnd\UseCase\Contact\ContactController;
use FrontEnd\UseCase\Site\SiteController;

$rootDir = dirname(__DIR__);

return [
    'common.aliases' => [
        '@app' => $rootDir,
        '@bower' => '@app/node_modules',
        '@npm' => '@app/node_modules',
        '@public' => '@app/frontend/public',
        '@resource' => '@app/common/src/Framework/resource',
        '@runtime' => '@public/runtime',
        '@common' => '@app/common/src/Framework/resource',
    ],
    'frontend.assetManager.basePath' => '@public/assets',
    'frontend.controllerMap' => [
        'about' => [
            'class' => AboutController::class,
        ],
        'contact' => [
            'class' => ContactController::class,
        ],
        'site' => [
            'class' => SiteController::class,
        ],
    ],
    'frontend.errorHandler.errorAction' => 'site/404',
    'frontend.mailer.useFileTransport' => true,
    'frontend.name' => 'Frontend Web Application',
    'frontend.id' => 'frontend',
    'frontend.params' => [
        'frontend.mailer.sender' => 'noreply@example.com',
        'frontend.mailer.sender.name' => 'Frontend Web Application',
        'frontend.menu.isguest' => [
            [
                'label' => Yii::t('app.basic', 'About'),
                'url' => ['/about/index'],
                'order' => 1,
            ],
            [
                'label' => Yii::t('app.basic', 'Contact'),
                'url' => ['/contact/index'],
                'order' => 2,
            ],
        ],
        'icons' => '@npm/fortawesome--fontawesome-free/svgs/{family}/{name}.svg',
    ],
    'frontend.request.cookieValidationKey' => 'your secret key here',
    'frontend.request.enableCsrfValidation' => true,
    'frontend.root.dir' => $rootDir,
    'frontend.urlManager.enablePrettyUrl' => true,
    'frontend.urlManager.showScriptName' => false,

    // yii2 extensions settings
    'yii.debug' => true,
    'yii.gii' => false,
];
