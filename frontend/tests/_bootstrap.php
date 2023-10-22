<?php

declare(strict_types=1);

define('YII_ENV', 'tests');
defined('YII_DEBUG') || define('YII_DEBUG', true);

$rootDir = dirname(__DIR__, 2);

require_once "$rootDir/vendor/yiisoft/yii2/Yii.php";
require_once "$rootDir/vendor/autoload.php";
