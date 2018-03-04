<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\MinkAwareContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
//class FeatureContext implements Context
{

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

	 /**
     * @When /^(?:|I )order "(?P<quantity>(?:[^"]|\\")*)" x "(?P<pizza>(?:[^"]|\\")*)" for the "(?P<ward>(?:[^"]|\\")*)" ward with discount code "(?P<discount>(?:[^"]|\\")*)"$/
     */
    public function orderQuotation($quantity, $pizza, $ward, $discount)
    {
        $this->selectOption("pizza", $pizza);
        $this->fillField("quantity", $quantity);
        $this->fillField("discount", $discount);
        $this->selectOption("ward", $ward);
		$this->pressButton("Order");
    }

	 /**
     * @Then /^(?:|I )should pay "(?P<price>(?:[^"]|\\")*)"$/
     */
    public function shouldPay($price)
    {
        $this->assertElementContainsText("#price", $price);
    }

}