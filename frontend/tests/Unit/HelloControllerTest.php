<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use Codeception\Test\Unit;
use FrontEnd\UseCase\Hello\HelloController;
use Yii;

use function ob_get_clean;
use function ob_start;

final class HelloControllerTest extends Unit
{
    public mixed $tester;

    public function testIndex(): void
    {
        $hellowControler = new HelloController('hello', Yii::$app);

        ob_start();
        $hellowControler->runAction('index');
        $result = ob_get_clean();

        $this->assertSame("hello world\n", $result);
    }
}
