<?php

declare(strict_types=1);

use Yiisoft\Config\Config;
use Yiisoft\Config\ConfigPaths;
use Yiisoft\Config\Modifier\RecursiveMerge;

$rootDir = dirname(__DIR__, 2);

// comment out the following two lines when deployed to production
defined('YII_DEBUG') || define('YII_DEBUG', true);

if (getenv('YII_ENV')) {
    defined('YII_ENV') || define('YII_ENV', getenv('YII_ENV'));
} else {
    defined('YII_ENV') || define('YII_ENV', 'dev');
}

if (getenv('YII_C3')) {
    $c3 = "$rootDir/c3.php";

    if (file_exists($c3)) {
        require_once $c3;
    }
}

require_once "$rootDir/vendor/autoload.php";
require_once "$rootDir/vendor/yiisoft/yii2/Yii.php";

$config = new Config(
    new ConfigPaths($rootDir, 'config', 'vendor'),
    modifiers: [RecursiveMerge::groups('backend', 'params-backend')],
    paramsGroup: 'params-backend',
);

(new yii\web\Application($config->get('backend')))->run();
