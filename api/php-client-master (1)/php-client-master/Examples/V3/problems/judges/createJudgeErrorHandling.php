<?php
/**
 * Example presents error handling for createJudge() API method  
*/

use SphereEngine\Api\ProblemsClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new ProblemsClientV3($accessToken, $endpoint);

// API usage
$source = '<source code>';
$nonexisting_compiler = 9999;

try {
	$response = $client->createJudge($source, $nonexisting_compiler);
	// response['id'] stores the ID of the created judge
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 400) {
		echo 'Empty source';
	} elseif ($e->getCode() == 404) {
		echo 'Compiler does not exist';
	}
}
