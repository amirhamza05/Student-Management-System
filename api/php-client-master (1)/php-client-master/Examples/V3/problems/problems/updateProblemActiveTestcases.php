<?php
/**
 * Example presents usage of the successful updateProblemActiveTestcases() API method
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
$activeTestcases = [1,2,3];

$response = $client->updateProblemActiveTestcases('EXAMPLE', $activeTestcases);
