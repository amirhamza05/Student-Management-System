<?php
/**
 * Example presents usage of the successful getCompilers() API method
*/

use SphereEngine\Api\CompilersClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV3($accessToken, $endpoint);

// API usage
try {
    $response = $client->getCompilers();
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	}
}
