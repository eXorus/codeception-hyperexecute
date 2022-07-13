<?php

class LoginCest
{
    public function userCanSignin(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->setCookie('cmapi_cookie_privacy', 'permit 1 required');
        $I->setCookie('notice_preferences', '0:');
        $I->setCookie('notice_gdpr_prefs', '0:');
        $I->setCookie('notice_behavior', 'expressed,eu');

        $I->amOnPage('login');

        $I->waitForElementVisible('#fielduserEmail');
        $I->fillField("#fielduserEmail", "hyperexecute@mc5.email");
        $I->waitForElementClickable("#continue-button");
        $I->click("#continue-button");

        $I->waitForElementVisible('#field_password');
        $I->fillField("#field_password", "DKjAdo3Vd8smD61izus");
        $I->waitForElementClickable("#login-button");
        $I->click("#login-button");

        $I->waitForElementVisible('#recommended-courses-container');
        $I->makeHtmlSnapshot();
        $I->makeScreenshot();

        // Selenium Docker in local: 6.21s
        // Selenium with LambdaTests: 11.74s

    }
}
