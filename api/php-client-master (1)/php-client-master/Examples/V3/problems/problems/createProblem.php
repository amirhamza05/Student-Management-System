<?php
/**
 * Example presents usage of the successful createProblem() API method  
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
$name = "Example problem";

$response = $client->createProblem($code, $name);
// response['id'] stores the ID of the created problem
