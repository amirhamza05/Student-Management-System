<?php
/**
 * Example presents usage of the successful updateProblem() API method
*/

use SphereEngine\Api\ProblemsClientV3;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new ProblemsClientV3($accessToken, $endpoint);

// API usage
$newProblemName = 'New example problem name';

$response = $client->updateProblem('EXAMPLE', $newProblemName);
