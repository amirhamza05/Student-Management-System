<?php
/**
 * Example presents error handling for deleteProblemTestcase() API method    
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
$problemId = 42;
$testcaseNumber = 0;

try {
    $response = $client->deleteProblemTestcase($problemId, $testcaseNumber);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	}  elseif ($e->getCode() == 404) {
	    echo 'Non existing resource, error code: '.$e->getErrorCode().', details available in the message: ' . $e->getMessage();
	} elseif ($e->getCode() == 400) {
	    echo 'Error code: '.$e->getErrorCode().', details available in the message: ' . $e->getMessage();
	}
}
