<?php
/**
 * Example presents error handling for updateJudge() API method  
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
$nonexistingCompiler = 9999;

try {
	$response = $client->updateJudge(1, $source, $nonexistingCompiler);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 400) {
		echo 'Empty source';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the judge is forbidden';
	} elseif ($e->getCode() == 404) {
		// aggregates two possible reasons of 404 error
		// non existing judge or compiler
		echo 'Non existing resource (judge, compiler), details available in the message: ' . $e->getMessage();
	}
}
