<?php
/**
 * Example presents usage of the successful createProblemTestcase() API method  
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
$id = 42;
$input = "model input";
$output = "model output";
$timeLimit = 5;
$judgeId = 1;
$active = true;

$response = $client->createProblemTestcase($id, $input, $output, $timeLimit, $judgeId, $active);
// response['number'] stores the number of created testcase
