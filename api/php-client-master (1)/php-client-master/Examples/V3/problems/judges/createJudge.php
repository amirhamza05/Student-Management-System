<?php
/**
 * Example presents usage of the successful createJudge() API method
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
$source = '<source code>';
$compiler = 11; // C language

$response = $client->createJudge($source, $compiler);
// response['id'] stores the ID of the created judge
