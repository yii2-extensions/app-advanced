<?php

declare(strict_types=1);

defined('YII_DEBUG') || define('YII_DEBUG', true);

if (getenv('YII_ENV')) {
    defined('YII_ENV') || define('YII_ENV', getenv('YII_ENV'));
} else {
    defined('YII_ENV') || define('YII_ENV', 'tests');
}

$rootDir = dirname(__DIR__, 2);

require_once "$rootDir/vendor/yiisoft/yii2/Yii.php";
require_once "$rootDir/vendor/autoload.php";
