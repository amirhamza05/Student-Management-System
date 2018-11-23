<?php
/**
 * Example presents usage of the successful createSubmission() API method
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
$source = '<source code>';
$compiler = 11; // C language

$response = $client->createSubmission($problemId, $source, $compiler);
// response['id'] stores the ID of the created submission
