<?php

declare(strict_types=1);

/**
 * @var array $params
 */

$rootDir = dirname(__DIR__, 2);

return [
    'id' => $params['console.id'],
    'aliases' => $params['console.aliases'],
    'basePath' => $rootDir,
    'bootstrap' => $params['console.bootstrap'] ?? [],
    'controllerMap' => $params['console.controllerMap'] ?? [],
    'params' => $params['console.params'] ?? [],
    'runtimePath' => "$rootDir/public/runtime",
];
