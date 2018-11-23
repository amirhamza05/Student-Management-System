<?php
/**
 * Example presents error handling for createSubmission() API method
*/

use SphereEngine\Api\CompilersClientV4;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV4($accessToken, $endpoint);

// API usage
$files = array(
    'prog.cpp' => '<source_code>',
    'prog.h' => '<source_code>'
);
$compiler = 11; // C language
$input = '2017';

try {
    $response = $client->createSubmissionMultiFiles($files, $compiler, $input);
	// response['id'] stores the ID of the created submission
} catch (SphereEngineResponseException $e) {
	if ($e->getCode() == 401) {
		echo 'Invalid access token';
	} elseif ($e->getCode() == 402) {
	    echo 'Unable to create submission';
	} elseif ($e->getCode() == 400) {
	    echo 'Error code: '.$e->getErrorCode().', details available in the message: ' . $e->getMessage();
	}
}
