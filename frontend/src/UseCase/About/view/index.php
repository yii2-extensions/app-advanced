<?php

declare(strict_types=1);

use yii\bootstrap5\Html;
use yii\web\View;

/**
 * @var View $this
 */
$this->title = Yii::t('frontend.advanced', 'About');
?>
<?= Html::beginTag('div', ['class' => 'text-center']) ?>
    <?= Html::tag('h1', '<b>'. Html::encode($this->title) . '</b>', ['class' => 'c-grey-900 mb-40 display-4']) ?>
    <?= Html::tag(
        'p',
        Yii::t('frontend.advanced', 'This is the About page. You may modify the following file to customize its content.')
    ) ?>
    <code><?= __FILE__ ?></code>
<?= Html::endTag('div') ?>
