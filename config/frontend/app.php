<?php

declare(strict_types=1);

/**
 * @var array $params
 */
$bootstrap = $params['frontend.bootstrap'] ?? [];

if (isset($params['yii.debug']) && $params['yii.debug'] === true) {
    $bootstrap = array_merge($bootstrap, ['debug']);
}

if (isset($params['yii.gii']) && $params['yii.gii'] === true) {
    $bootstrap = array_merge($bootstrap, ['gii']);
}

return [
    'id' => $params['frontend.id'],
    'aliases' => $params['common.aliases'],
    'basePath' => $params['frontend.root.dir'],
    'bootstrap' => $bootstrap,
    'controllerMap' => $params['frontend.controllerMap'] ?? [],
    'language' => $params['frontend.language'] ?? 'en-US',
    'name' => $params['frontend.name'],
    'params' => $params['frontend.params'] ?? [],
    'runtimePath' => $params['frontend.root.dir'] . '/public/runtime',
];
