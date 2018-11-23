<?php
/**
 * Example presents usage of the successful createProblem() API method  
 */

use SphereEngine\Api\ProblemsClientV4;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new ProblemsClientV4($accessToken, $endpoint);

// API usage
$name = "Example problem";
$masterjudgeId = 1001;

$response = $client->createProblem($name, $masterjudgeId);
// response['id'] stores the ID of the created problem
