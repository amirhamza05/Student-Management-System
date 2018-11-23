<?php
/**
 * Example presents error handling for getJudge() API method    
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
$judgeId = 1;
try {
    $response = $client->getJudge($judgeId);
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 404) {
		echo 'Judge does not exist';
	} elseif ($e->getCode() == 403) {
		echo 'Access to the judge is forbidden';
	}
}
