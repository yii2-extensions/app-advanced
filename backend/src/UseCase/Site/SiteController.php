<?php

declare(strict_types=1);

namespace BackEnd\UseCase\Site;

use Common\Framework\Controller\Controller;
use yii\web\ErrorAction;

final class SiteController extends Controller
{
    public function actions(): array
    {
        return [
            '404' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function getViewPath(): string
    {
        return __DIR__ . '/view';
    }
}
