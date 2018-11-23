<?php
/**
 * Example presents error handling for getProblemTestcase() API method    
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
$problemCode = 'TEST';
$nonexistingTestcaseNumber = 999;

try {
	$response = $client->getProblemTestcase($problemCode, $nonexistingTestcaseNumber);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	} elseif ($e->getCode() == 404) {
		// aggregates two possible reasons of 404 error
		// non existing problem or testcase
		echo 'Non existing resource (problem, testcase), details available in the message: ' . $e->getMessage();
	}
}
