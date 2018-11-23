<?php
/**
 * Example presents connection error handling for
 * Sphere Engine Compilers API client
*/

use SphereEngine\Api\CompilersClientV3;
use SphereEngine\Api\SphereEngineConnectionException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = 'unavailable.endpoint.url';

// initialization
try {
	$client = new CompilersClientV3($accessToken, $endpoint);
	$client->test();
} catch (SphereEngineConnectionException $e) {
	echo "Error: API connection error " . $e->getCode() . ": " . $e->getMessage();
}
