<?php

declare(strict_types=1);

namespace FrontEnd\UseCase\About;

use Common\Framework\Controller\Controller;

final class AboutController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function getViewPath(): string
    {
        return __DIR__ . '/view';
    }
}
