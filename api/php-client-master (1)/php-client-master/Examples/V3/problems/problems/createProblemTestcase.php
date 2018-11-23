<?php
/**
 * Example presents usage of the successful createProblemTestcase() API method  
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
$code = "EXAMPLE";
$input = "model input";
$output = "model output";
$timelimit = 5;
$judgeId = 1;

$response = $client->createProblemTestcase($code, $input, $output, $timelimit, $judgeId);
// response['number'] stores the number of created testcase
