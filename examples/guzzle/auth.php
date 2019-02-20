<?php

// autoload vendor classes
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use Dotenv\Dotenv;

// Load the env variables
$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

// Credentials
$apiUser = getenv('API_USER');
$apiUserPassword = getenv('API_USER_PASSWORD');
$apiClientID = getenv('API_CLIENT_ID');
$apiClientSecretKey = getenv('API_CLIENT_SECRET_KEY');
$appBaseURL = getenv('APP_BASE_URL');

$client = new Client([
    'base_uri' => $appBaseURL
]);

$response = $client->request('POST', 'oauth/token', [
    'form_params' => [
        'grant_type' => 'password',
        'client_id' => $apiClientID,
        'client_secret'  => $apiClientSecretKey,
        'username' => $apiUser,
        'password' => $apiUserPassword,
        'scope' => '*'
    ]
]);

$contents = $response->getBody()->getContents();

// put the token in the environment
$responseArray = $assocArray = json_decode($contents, true);
putenv('TOKEN_TYPE='.$responseArray['token_type']);
putenv('ACCESS_TOKEN='.$responseArray['access_token']);

echo $contents;