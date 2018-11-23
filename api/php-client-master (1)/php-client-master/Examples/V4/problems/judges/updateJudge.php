<?php
/**
 * Example presents usage of the successful updateJudge() API method
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
$source = '<source code>';
$compiler = 11; // C language

$response = $client->updateJudge(1, $source, $compiler);
