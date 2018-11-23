<?php
/**
 * Example presents usage of the successful createSubmission() API method
*/

use SphereEngine\Api\CompilersClientV4;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV4($accessToken, $endpoint);

// API usage
$tarSource = '<tar_source>';
$compiler = 11; // C language
$input = '2017';

$response = $client->createSubmissionWithTarSource($tarSource, $compiler, $input);
// response['id'] stores the ID of the created submission
