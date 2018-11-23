<?php
/**
 * Example presents error handling for getSubmissionFile() API method    
 */

use SphereEngine\Api\ProblemsClientV4;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new ProblemsClientV4($accessToken, $endpoint);

// API usage

try {
    $response = $client->getSubmissionFile(2017, 'source');
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the submission is forbidden';
	} elseif ($e->getCode() == 404) {
		echo 'Non existing resource, error code: '.$e->getErrorCode().', details available in the message: ' . $e->getMessage();
	}
}
