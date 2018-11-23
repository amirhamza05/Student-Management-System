<?php
/**
 * Example presents usage of the successful getProblemTestcase() API method  
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
$problemCode = 'TEST';
$testcaseNumber = 0;

$response = $client->getProblemTestcase($problemCode, $testcaseNumber);
