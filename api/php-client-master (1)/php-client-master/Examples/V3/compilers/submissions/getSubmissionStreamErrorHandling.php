<?php
/**
 * Example presents error handling for getSubmissionStream() API method
*/

use SphereEngine\Api\CompilersClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV3($accessToken, $endpoint);

// API usage
try {
	$nonexisting_submission_id = 999999999;
	$response = $client->getSubmissionStream($nonexisting_submission_id, 'output');
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 404) {
		// aggregates two possible reasons of 404 error
		// non existing submission or stream
    	echo 'Non existing resource (submission, stream), details available in the message: ' . $e->getMessage();
    }
}
