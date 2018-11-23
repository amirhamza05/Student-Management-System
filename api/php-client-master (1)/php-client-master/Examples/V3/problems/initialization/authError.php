<?php
/**
 * Example presents authorization error handling for 
 * Sphere Engine Problems API client
*/

use SphereEngine\Api\ProblemsClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = "wrong access token";
$endpoint = '<endpoint>';
$client = new ProblemsClientV3($accessToken, $endpoint);

// initialization
try {	
	$client->test();
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	}
}