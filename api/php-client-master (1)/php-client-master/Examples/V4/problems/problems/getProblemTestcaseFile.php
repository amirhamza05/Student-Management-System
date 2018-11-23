<?php
/**
 * Example presents usage of the successful getProblemTestcaseFile() API method  
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
$problemId = 42;
$testcaseNumber = 0;
$file = 'input';

$response = $client->getProblemTestcaseFile($problemId, $testcaseNumber, $file);
