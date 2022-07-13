<?php

class LoginCest
{
    public function userCanSignin(AcceptanceTester $I)
    {
        $I->amOnPage('login');

        $I->waitForElementVisible('iframe.truste_popframe');
        $I->switchToIFrame("iframe.truste_popframe");
        $I->waitForElementClickable('a.required');
        $I->click('a.required');

        $I->waitForElementVisible('#fielduserEmail', 30);
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

        // Selenium Docker in local: 9.47s
        // Selenium with LambdaTests: 13.76s

    }
}
