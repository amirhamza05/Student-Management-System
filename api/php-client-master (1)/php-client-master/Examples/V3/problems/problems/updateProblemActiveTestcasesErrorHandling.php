<?php
/**
 * Example presents error handling for updateProblemActiveTestcases() API method  
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
$activeTestcases = [1,2,3];

try {
	$response = $client->updateProblemActiveTestcases($problemCode, $activeTestcases);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the problem is forbidden';
	} elseif ($e->getCode() == 400) {
		echo 'Empty problem code';
	} elseif ($e->getCode() == 404) {
		echo 'Non existing problem';
	}
}
