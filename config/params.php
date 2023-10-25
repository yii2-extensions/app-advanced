<?php

declare(strict_types=1);

$rootDir = dirname(__DIR__);

return [
    'common.aliases' => [
        '@common' => "$rootDir/common/src/Framework/resource",
    ],
    'common.bootstrap' => ['log'],
    'common.language' => 'en-US',
    'common.mailer.useFileTransport' => true,
];
