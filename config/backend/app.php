<?php

declare(strict_types=1);

/**
 * @var array $params
 */
$bootstrap = $params['backend.bootstrap'] ?? [];

if (isset($params['yii.debug']) && $params['yii.debug'] === true) {
    $bootstrap = array_merge($bootstrap, ['debug']);
}

if (isset($params['yii.gii']) && $params['yii.gii'] === true) {
    $bootstrap = array_merge($bootstrap, ['gii']);
}

return [
    'id' => $params['backend.id'],
    'aliases' => $params['common.aliases'],
    'basePath' => $params['backend.root.dir'],
    'bootstrap' => $bootstrap,
    'controllerMap' => $params['backend.controllerMap'] ?? [],
    'language' => $params['backend.language'] ?? 'en-US',
    'name' => $params['backend.name'],
    'params' => $params['backend.params'] ?? [],
    'runtimePath' => $params['backend.root.dir'] . '/public/runtime',
];
