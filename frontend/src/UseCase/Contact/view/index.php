<?php

declare(strict_types=1);

use FrontEnd\UseCase\Contact\ContactForm;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;
use yii\symfonymailer\Mailer;
use yii\web\Session;
use yii\web\View;

/**
 * @var ContactForm $model
 * @var Mailer $mailer
 * @var Session $session
 * @var View $this
 */
$this->title = $this->title = Yii::t('frontend.advanced', 'Contact');
?>
<?= Html::beginTag('div', ['class' => 'container mt-3']) ?>
    <?= Html::beginTag('div', ['class' => 'row align-items-center justify-content-center']) ?>
        <?= Html::beginTag('div', ['class' => 'col-md-5 col-sm-12']) ?>
            <?= Html::beginTag(
                'div',
                ['class' => 'bg-body-tertiary shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500'],
            ) ?>
                <?= Html::tag('h1', '<b>' . Html::encode($this->title) . '</b>', ['class' => 'contact-form-title']) ?>
                <?= Html::beginTag('p', ['class' => 'contact-form-subtitle']) ?>
                    <?= Yii::t(
                        'frontend.advanced',
                        'Please fill out the following fields to Sign up.'
                    ) ?>
                <?= Html::endTag('p') ?>
                <?= Html::tag('hr', '', ['class' => 'mb-3']) ?>
                <?php $form = ActiveForm::begin(
                    [
                        'id' => 'contact-form',
                        'layout' => 'default',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => false,
                        'fieldConfig' => [
                            'template' => '{input}{label}{hint}{error}',
                            'horizontalCssClasses' => [
                                'error' => 'text-center',
                                'field' => 'form-floating',
                            ],
                            'options' => ['class' => 'form-floating mb-4'],
                        ],
                        'validateOnType' => false,
                        'validateOnChange' => false,
                    ]
                ) ?>
                    <?= $form->field($model, 'name')
                        ->textInput(
                            [
                                'autofocus' => true,
                                'oninput' => 'this.setCustomValidity("")',
                                'oninvalid' => 'this.setCustomValidity("' . Yii::t('frontend.advanced', 'Enter Username Here') .'")',
                                'placeholder' => Yii::t('frontend.advanced', 'Username'),
                                'required' => !((YII_ENV === 'test')),
                                'tabindex' => '1',
                            ]
                        )
                    ?>
                    <?= $form->field($model, 'email')
                        ->textInput(
                            [
                                'oninput' => 'this.setCustomValidity("")',
                                'oninvalid' => 'this.setCustomValidity("' . Yii::t('frontend.advanced', 'Enter Email Here') . '")',
                                'placeholder' => Yii::t('frontend.advanced', 'Email'),
                                'required' => !((YII_ENV === 'tests')),
                                'tabindex' => '2',
                            ]
                        )
                    ?>
                    <?= $form->field($model, 'subject')
                        ->textInput(
                            [
                                'oninput' => 'this.setCustomValidity("")',
                                'oninvalid' => 'this.setCustomValidity("' . Yii::t('frontend.advanced', 'Enter Subject Here').'")',
                                'placeholder' => Yii::t('frontend.advanced', 'Subject'),
                                'required' => !((YII_ENV === 'test')),
                                'tabindex' => '3',
                            ]
                        )
                    ?>
                    <?= $form->field($model, 'body')
                        ->textarea(
                            [
                                'oninput' => 'this.setCustomValidity("")',
                                'oninvalid' => 'this.setCustomValidity("' . Yii::t('frontend.advanced', 'Enter Body Here') . '")',
                                'placeholder' => Yii::t('frontend.advanced', 'Body'),
                                'required' => !((YII_ENV === 'test')),
                                'style' => 'height: 100px',
                                'tabindex' => '4',
                            ]
                        )
                    ?>
                    <?= $form->field($model, 'verifyCode', ['labelOptions' => ['id' => 'verifyCode']])
                        ->widget(
                            Captcha::class,
                            [
                                'captchaAction' => 'contact/captcha',
                                'template' => '{input}<div class="text-center">' . '<b>' . Yii::t('frontend.advanced', 'Captcha Code') . ': ' . '</b>' . '{image}</div>',
                                'options' => [
                                    'class' => 'form-control',
                                    'oninput' => 'this.setCustomValidity("")',
                                    'oninvalid' => 'this.setCustomValidity("' . Yii::t('frontend.advanced', 'Enter Captcha Code Here') . '")',
                                    'placeholder' => Yii::t('frontend.advanced', 'Captcha Code'),
                                    'required' => !((YII_ENV === 'test')),
                                    'style' => 'margin-bottom:10px',
                                    'tabindex' => '5',
                                ],
                            ]
                        )
                    ?>
                    <?= Html::beginTag('div', ['class' => 'd-grid gap-2']) ?>
                        <?= Html::submitButton(
                                Yii::t('frontend.advanced', 'Contact us'),
                                ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'contact-button', 'tabindex' => '6']
                        ) ?>
                    <?= Html::endTag('div') ?>
                    <?= Html::beginTag('p', ['class' => 'text-center mt-5']) ?>
                        <?= Yii::t(
                            'frontend.advanced',
                            'If you have business inquiries or other questions,<br/> please fill out the following form to contact us.<br/> <b>Thank you</b>.'
                        ) ?>
                    <?= Html::endTag('p') ?>
                <?php ActiveForm::end() ?>
                <?php if ($session->hasFlash('contactFormSubmitted')) : ?>
                    <?= Html::tag('hr') ?>
                    <?= Html::beginTag('p', ['class' => 'text-center']) ?>
                        <?= Yii::t(
                            'frontend.advanced',
                            'Note that if you turn on the Yii debugger, you should be able to view the mail message on the mail panel of the debugger.'
                        ) ?>
                        <br/>
                        <br/>
                        <?php if ($mailer->useFileTransport) : ?>
                            <?= Yii::t(
                                'frontend.advanced',
                                'Because the application is in development mode, the email is not sent but saved as a file under.'
                            ) ?>
                            <br/>
                            <?= '<code>' . Yii::getAlias($mailer->fileTransportPath) . '</code>' ?>
                            <br/>
                            <br/>
                            <?= Yii::t(
                                'frontend.advanced',
                                'Please configure the <code>useFileTransport </code>property of the <code>mail </code>application component to be false to enable email sending.'
                            ) ?>
                        <?php endif ?>
                    <?= Html::endTag('p') ?>
                <?php endif ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div');
