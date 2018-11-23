<?php
/**
 * Example presents error handling for getProblems() API method  
 */

use SphereEngine\Api\ProblemsClientV4;
use SphereEngine\Api\SphereEngineResponseException;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new ProblemsClientV4($accessToken, $endpoint);

// API usage

try {
    $response = $client->getProblems();
} catch (SphereEngineResponseException $e) {
    if ($e->getCode() == 401) {
        echo 'Invalid access token';
    }
}
