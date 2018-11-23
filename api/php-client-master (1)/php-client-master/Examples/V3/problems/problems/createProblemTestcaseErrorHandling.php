<?php
/**
 * Example presents error handling for createProblemTestcase() API method  
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
$code = "EXAMPLE";
$input = "model input";
$output = "model output";
$timelimit = 5;
$nonexistingJudge = 9999;

try {
	$response = $client->createProblemTestcase($code, $input, $output, $timelimit, $nonexistingJudge);
	// response['number'] stores the number of created testcase
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	} elseif ($e->getCode() == 404) {
		// aggregates two possible reasons of 400 error
		// non existing problem and judge
		echo 'Non existing resource (problem or judge), details available in the message: ' . $e->getMessage();
	}
}
