<?php
/**
 * Example presents error handling for createProblem() API method  
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
$name = "Example problem"; 

try {
	$response = $client->createProblem($code, $name);
	// response['id'] stores the ID of the created problem
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 400) {
		// aggregates four possible reasons of 400 error
		// empty problem code, empty problem name, not unique problem code, invalid problem code
		echo 'Bad request (empty problem code, empty problem name, not unique problem code, invalid problem code), details available in the message: ' . $e->getMessage();
	} elseif ($e->getCode() == 404) {
		echo 'Masterjudge does not exist';
	}
}
