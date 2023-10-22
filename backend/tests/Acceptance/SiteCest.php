<?php

declare(strict_types=1);

namespace BackEnd\Tests\Acceptance;

use BackEnd\Tests\Support\AcceptanceTester;

final class SiteCest
{
    public function homePage(AcceptanceTester $I): void
    {
        $I->amGoingTo('navigate to the Home page.');
        $I->amOnRoute('/');

        $I->wantTo('ensure that Home page works.');
        $I->expectTo('see page index.');
        $I->see('Back End Web Application');
        $I->see('Yii v.2.2');
    }
}
