<?php

use Behat\MinkExtension\Context\RawMinkContext;

final class MinkContext extends RawMinkContext
{
    /**
     * @When /^I wait for the form to be loaded$/
     */
    public function waitForTheFormToBeLoaded()
    {
        $this->getSession()->wait(1000, '$("#formContent").css("opacity") === 1');
    }
}