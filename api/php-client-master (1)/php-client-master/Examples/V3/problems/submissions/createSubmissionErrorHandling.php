<?php
/**
 * Example presents error handling for createSubmission() API method
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
$source = '<source code>';
$nonexistingCompiler = 99999;

try {
	$response = $client->createSubmission($problemCode, $source, $nonexistingCompiler);
	// response['id'] stores the ID of the created submission
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 404) {
		// aggregates three possible reasons of 404 error
		// non existing problem, compiler or user
		echo 'Non existing resource (problem, compiler or user), details available in the message: ' . $e->getMessage();
	} elseif ($e->getCode() == 400) {
		echo 'Empty source code';
	}
}
