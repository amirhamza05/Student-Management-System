<?php
/**
 * Example presents error handling for updateProblem() API method
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
$problemCode = 'NONEXISTING_CODE';
$newProblemName = 'New example problem name';

try {
	$response = $client->updateProblem($problemCode, $newProblemName);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	} elseif ($e->getCode() == 400) {
		// aggregates two possible reasons of 400 error
		// empty problem code, empty problem name
		echo 'Bad request (empty problem code, empty problem name), details available in the message: ' . $e->getMessage();
	} elseif ($e->getCode() == 404) {
		// aggregates two possible reasons of 404 error
		// non existing problem or masterjudge
		echo 'Non existing resource (problem, masterjudge), details available in the message: ' . $e->getMessage();
	}
}
