<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
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
        $this->ApiToken = "RBl9Oy0ZvIT8QfOMFmKR4jcyWWeDB6tVMk3SsUH7LuYu7BEtqLk7lOL1ANQk";
    }

    /**
     * @Given I have the payload:
     */
    public function iHaveThePayload(PyStringNode $string)
    {
        $this->payload = $string;
    }

    /**
     * @When /^I request "(GET|PUT|POST|DELETE|PATCH) ([^"]*)"$/
     */
    public function iRequest($httpMethod, $argument)
    {
        $client = new GuzzleHttp\Client();
        $this->response = $client->request(
            $httpMethod,
            'http://127.0.0.1:8080' . $argument,
            [
                'body' => $this->payload,
                'api_token'=>$this->ApiToken,
                'headers' => [
                    "Content-Type" => "application/json",
                ],
                'query' =>   //<==add 'query' here
                    ['form_params'=>
                        ['api_token'=>$this->ApiToken]
                    ]
            ]
        );
        $this->responseBody = $this->response->getBody(true);
    }

    /**
     * @Then /^I get a response$/
     */
    public function iGetAResponse()
    {
        if (empty($this->responseBody)) {
            throw new Exception('Did not get a response from the API');
        }
    }

    /**
     * @Given /^the response is JSON$/
     */
    public function theResponseIsJson()
    {
        $data = json_decode($this->responseBody);

        if (empty($data)) {
            throw new Exception("Response was not JSON\n" . $this->responseBody);
        }
    }

    /**
     * @Then the response contains a question
     */
    public function theResponseContainsAQuestion()
    {
        $data = json_decode($this->responseBody);

        $question = $data[0];

        if (!property_exists($question, 'question')) {
            throw new Exception('This is not a question');
        }
    }
}