<?php
/**
 * Example presents error handling for getProblemTestcaseFile() API method    
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
$testcaseNumber = 0;
$nonexistingFile = 'nonexistingFile';

try {
	$response = $client->getProblemTestcaseFile($problemCode, $testcaseNumber, $nonexistingFile);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	} elseif ($e->getCode() == 404) {
		// aggregates three possible reasons of 404 error
		// non existing problem, testcase or file
		echo 'Non existing resource (problem, testcase or file), details available in the message: ' . $e->getMessage();
	}
}
