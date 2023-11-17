<?php

declare(strict_types=1);

return [
    'id' => $params['backend.id'],
    'aliases' => $params['common.aliases'],
    'basePath' => $params['backend.root.dir'],
    'bootstrap' => $params['backend.bootstrap'],
    'controllerMap' => $params['backend.controllerMap'] ?? [],
    'language' => $params['backend.language'] ?? 'en-US',
    'name' => $params['backend.name'],
    'params' => $params['backend.params'] ?? [],
    'runtimePath' => $params['backend.root.dir'] . '/public/runtime',
];
