<?php

namespace Tests\Unit;

use Tests\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Product;
use App\User;

class ProductTest extends TestCase
{
    protected $apiToken;
    protected $server_ip = '157.230.233.149';
    protected $server_port = '80';
    protected $server_protocol = 'http';
    protected $uri = '/erply/product/public/index.php/api/products';
    protected $user_id;

    public function setUp()
    {
        parent::setUp();

        $this->createApplication();
        $this->user = \App\User::first();

        $this->apiToken = $this->user->api_token;
    }


    public function testGetProducts()
    {

        $client = $this->createNewClient();

        $query = array(
            'api_token' => $this->apiToken,
            'page' => 1,
            'per_page' => 5
        );

        $response = $client->get($this->uri, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('data', $data_array);
        $this->assertArrayHasKey('name', $data_array['data'][0]);
        $this->assertArrayHasKey('current_page', $data_array);
        $this->assertEquals(1, $data_array['current_page']);
        $this->assertEquals(5, $data_array['per_page']);
        $this->assertEquals('string', gettype($data_array['data'][0]['name']));

    }

    public function testPostCreateUpdateDeleteProduct()
    {

        // TEST CREATE PRODUCT
        $client = $this->createNewClient();
        $price = money_format('%i', rand(1, 100) . '.' . rand(1, 100));
        $query = [
            'api_token' => $this->apiToken,
            'name' => 'Sleek Concrete Chair ' . rand(2, 100),
            'price' => $price,
        ];


        $response = $client->post($this->uri, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');
        $product_id = $data_array['product']['id'];

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('product', $data_array);
        $this->assertArrayHasKey('id', $data_array['product']);
        $this->assertArrayHasKey('name', $data_array['product']);
        $this->assertArrayHasKey('price', $data_array['product']);
        $this->assertEquals('integer', gettype($product_id));
        $this->assertEquals('string', gettype($data_array['product']['name']));


        //TEST UPDATE PRODUCT
        $price = money_format('%i', rand(1, 100) . '.' . rand(1, 100));
        $query = [
            'api_token' => $this->apiToken,
            'id' => $product_id,
            'name' => 'Product_Updated',
            'price' => $price,
        ];

        $response = $client->put($this->uri . '/' . $product_id, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('product', $data_array);
        $this->assertArrayHasKey('id', $data_array['product']);
        $this->assertArrayHasKey('name', $data_array['product']);
        $this->assertArrayHasKey('price', $data_array['product']);
        $this->assertEquals('integer', gettype($data_array['product']['id']));
        $this->assertEquals('string', gettype($data_array['product']['name']));
        $this->assertEquals('Product_Updated', $data_array['product']['name']);

        // TEST DELETE PRODUCT
        $query = [
            'api_token' => $this->apiToken,
            'id' => $product_id
        ];
        $response = $client->request('DELETE', $this->uri . '/' . $product_id, ['query' => $query]);
        $this->assertEquals(204, $response->getStatusCode());
        $this->assertEquals('', $response->getBody(true));

    }


    public function testGetProductsById()
    {

        $test_product_data = $this->createTestProduct('Small Concrete Coat');

        $client = $this->createNewClient();

        $query = array(
            'api_token' => $this->apiToken
        );

        $response = $client->get($this->uri . '/' . $test_product_data->id, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('product', $data_array);
        $this->assertArrayHasKey('id', $data_array['product']);
        $this->assertArrayHasKey('name', $data_array['product']);
        $this->assertArrayHasKey('price', $data_array['product']);
        $this->assertEquals('integer', gettype($data_array['product']['id']));
        $this->assertEquals('string', gettype($data_array['product']['name']));

        $this->deleteTestProduct($test_product_data->id);
    }

    public function testSearchProductsByNameAndExactName()
    {
        $product_complete_name = 'Fantastic Wooden Chair';
        $product_name = 'Chair';

        $test_product_data = $this->createTestProduct($product_complete_name);

        $client = $this->createNewClient();

        $query = array(
            'api_token' => $this->apiToken
        );

        $response = $client->get($this->uri . '/search/' . $product_name, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('data', $data_array);
        $this->assertArrayHasKey('name', $data_array['data'][0]);
        $this->assertArrayHasKey('current_page', $data_array);
        $this->assertEquals(1, $data_array['current_page']);
        $this->assertEquals(10, $data_array['per_page']);
        $this->assertEquals('string', gettype($data_array['data'][0]['name']));


        // SEARCH BY EXACT NAME

        $response = $client->get($this->uri . '/searchexact/' . $product_complete_name, ['query' => $query]);
        $body = $response->getBody(true);
        $data_array = json_decode($body, true);
        $header_type = $response->getHeader('Content-Type');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $header_type[0]);
        $this->assertArrayHasKey('data', $data_array);
        $this->assertArrayHasKey('name', $data_array['data'][0]);
        $this->assertArrayHasKey('current_page', $data_array);
        $this->assertEquals(1, $data_array['current_page']);
        $this->assertEquals(10, $data_array['per_page']);
        $this->assertEquals('string', gettype($data_array['data'][0]['name']));

        $this->deleteTestProduct($test_product_data->id);

    }

    public function testNotFoundProductsAllEndPoints()
    {
        $client = $this->createNewClient();

        $query = array(
            'api_token' => $this->apiToken
        );
        $product_id = 99999;
        $product_not_exist = 'BigChair';

        // TEST GET PRODUCT DON'T EXIST
        try {
            $response = $client->get($this->uri . '/' . $product_id, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(404, $e->getResponse()->getStatusCode());
            $this->assertEquals('Not Found', $e->getResponse()->getReasonPhrase());
        }

        // TEST PUT PRODUCT DON'T EXIST
        try {
            $price = money_format('%i', rand(1, 100) . '.' . rand(1, 100));
            $query = [
                'api_token' => $this->apiToken,
                'id' => $product_id,
                'name' => 'Product_Updated',
                'price' => $price,
            ];

            $response = $client->put($this->uri . '/' . $product_id, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(404, $e->getResponse()->getStatusCode());
            $this->assertEquals('Not Found', $e->getResponse()->getReasonPhrase());
        }

        // TEST DELETE PRODUCT DON'T EXIST
        try {
            $response = $client->delete($this->uri . '/' . $product_id, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(404, $e->getResponse()->getStatusCode());
            $this->assertEquals('Not Found', $e->getResponse()->getReasonPhrase());
        }

        // TEST SEARCH PRODUCT NAME DON'T EXIST
        try {
            $response = $client->get($this->uri . '/search/' . $product_not_exist, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(404, $e->getResponse()->getStatusCode());
            $this->assertEquals('Not Found', $e->getResponse()->getReasonPhrase());
        }

        // TEST SEARCH EXACT PRODUCT NAME DON'T EXIST
        try {
            $response = $client->get($this->uri . '/searchexact/' . $product_not_exist, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(404, $e->getResponse()->getStatusCode());
            $this->assertEquals('Not Found', $e->getResponse()->getReasonPhrase());
        }

    }

    public function testMethodNotAllowed()
    {

        $client = $this->createNewClient();
        $product_not_exist = 'BigChair';
        $query = array(
            'api_token' => $this->apiToken
        );

        // TEST METHOD NOT ALLOWED DELETE ON SEARCH
        try {
            $response = $client->delete($this->uri . '/search/' . $product_not_exist, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(405, $e->getResponse()->getStatusCode());
            $this->assertEquals('Method Not Allowed', $e->getResponse()->getReasonPhrase());
        }

        // TEST METHOD NOT ALLOWED POST ON SEARCH
        try {
            $response = $client->post($this->uri . '/search/' . $product_not_exist, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(405, $e->getResponse()->getStatusCode());
            $this->assertEquals('Method Not Allowed', $e->getResponse()->getReasonPhrase());
        }

    }

    public function testUnauthenticatedInvalidToken()
    {

        $client = $this->createNewClient();
        $query = array(
            'api_token' => $this->apiToken."addedtoFail"
        );

        // TEST Unauthenticated REQUEST
        try {
            $response = $client->get($this->uri, ['query' => $query]);
        } catch (ClientException $e) {
            $this->assertEquals(401, $e->getResponse()->getStatusCode());
            $this->assertEquals('Unauthorized', $e->getResponse()->getReasonPhrase());
        }

    }


    private function createTestProduct($product_name)
    {
        $price = money_format('%i', rand(1, 100) . '.' . rand(1, 100));
        $data = [
            'name' => $product_name,
            'price' => $price
        ];

        return Product::create($data);
    }

    private function deleteTestProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    }

    private function createNewClient()
    {
        return new Client(['base_uri' => $this->server_protocol.'://' . $this->server_ip . ':'.$this->server_port], array(
            'request.options' => array(
                'exceptions' => false,
            )
        ));
    }

}
