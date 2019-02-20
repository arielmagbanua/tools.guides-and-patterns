<?php
// autoload vendor classes
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use Dotenv\Dotenv;

// Load the env variables
$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$payload = '{
	"generate_from_new": [
		{
			"employee": {
				"id": 395,
				"employee_id": "894578",
				"first_name": "Cow",
				"last_name": "Chicken",
				"company": "Zeald",
				"email": "894578@zealdlifecare.co.nz",
				"password": "cowchi894578"
			},
			"coordinator": {
				"id": 312,
				"employee_id": "zealdtester4",
				"first_name": "Zeald",
				"last_name": "Tester IV",
				"company": "Zeald",
				"email": "niel.singson+zt4@zeald.com"
			},
			"course_id": 13656,
			"course_event_id": 14384,
			"product_id": 5198,
			"precourse_reading": 0,
			"pass": 0
		}
	]
}';

// credentials
$tokenType = getenv('TOKEN_TYPE');
$accessToken = getenv('ACCESS_TOKEN');

$appBaseURL = getenv('APP_BASE_URL');

$client = new Client([
    'base_uri' => $appBaseURL
]);

$response = $client->request('POST', 'api/bookStudentsToEvent', [
    'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => "$tokenType $accessToken"
    ],
    'json' => json_decode($payload, true)
]);

$contents = $response->getBody()->getContents();
echo $contents;
