Feature: Sample Tests
In order to test the API
I need to be able to test the API

Scenario: Get Questions
Given I have the payload:
"""
"""
When I request "GET /api/products"
Then the response is JSON
Then the response contains a question