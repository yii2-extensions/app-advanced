<?php

declare(strict_types=1);

use BackEnd\UseCase\Site\SiteController;

$rootDir = dirname(__DIR__);

return [
    'backend.aliases' => [
        '@app' => $rootDir,
        '@bower' => '@app/node_modules',
        '@npm' => '@app/node_modules',
        '@public' => '@app/backend/public',
        '@resource' => '@app/common/src/Framework/resource',
        '@runtime' => '@public/runtime',
    ],
    'backend.assetManager.basePath' => '@public/assets',
    'backend.controllerMap' => [
        'site' => [
            'class' => SiteController::class,
        ],
    ],
    'backend.errorHandler.errorAction' => 'site/404',
    'backend.mailer.useFileTransport' => true,
    'backend.name' => 'Backend Web Application',
    'backend.id' => 'backend',
    'backend.params' => [
        'backend.mailer.sender' => 'noreply@example.com',
        'backend.mailer.sender.name' => 'Backend Web Application',
        'backend.menu.isguest' => [],
        'icons' => '@npm/fortawesome--fontawesome-free/svgs/{family}/{name}.svg',
    ],
    'backend.request.cookieValidationKey' => 'your secret key here',
    'backend.request.enableCsrfValidation' => true,
    'backend.root.dir' => $rootDir,
    'backend.urlManager.enablePrettyUrl' => true,
    'backend.urlManager.showScriptName' => false,

    // yii2 extensions settings
    'yii.debug' => true,
    'yii.gii' => false,
];
