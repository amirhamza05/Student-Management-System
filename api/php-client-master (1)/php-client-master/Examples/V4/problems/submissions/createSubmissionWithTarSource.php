<?php
/**
 * Example presents usage of the successful createSubmissionWithTarSource() API method
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
$tarSource = '<tar_source>';
$compiler = 11; // C language

$response = $client->createSubmissionWithTarSource($problemId, $tarSource, $compiler);
// response['id'] stores the ID of the created submission
