<?php

declare(strict_types=1);

namespace FrontEnd\Tests\Acceptance;

use FrontEnd\Tests\Support\AcceptanceTester;

final class ContactCest
{
    public function contactPage(AcceptanceTester $I): void
    {
        $I->amGoingTo('navigate to the Contact page.');
        $I->amOnRoute('contact/index');

        $I->wantTo('ensure that Contact page works.');
        $I->expectTo('see page index.');
        $I->see('Contact');
        $I->see('If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.');
    }
}
