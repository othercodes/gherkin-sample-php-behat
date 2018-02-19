<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \PHPUnit_Framework_TestCase implements Context
{
    private $answer = 0;

    /**
     * @Given I start with :arg1
     */
    public function iStartWith($arg1)
    {
        $this->answer = $arg1;
    }

    /**
     * @When I add :arg1
     */
    public function iAdd($arg1)
    {
        $this->answer += $arg1;
    }

    /**
     * @When I multiply by :arg1
     */
    public function iMultiplyBy($arg1)
    {
        $this->answer *= $arg1;
    }

    /**
     * @Then I end up with :arg1
     */
    public function iEndUpWith($arg1)
    {
        $this->assertEquals($this->answer, $arg1);
    }

}
