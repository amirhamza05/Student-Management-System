<?php
/**
 * Example presents error handling for updateSubmission() API method
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
    $response = $client->updateSubmission(1, false);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
	    echo 'Access to the submission is forbidden';
	} elseif ($e->getCode() == 404) {
	    echo 'Submission does not exist';
	}
}
