<?php
/**
 * Example presents usage of the successful getCompilers() API method
*/

use SphereEngine\Api\CompilersClientV3;

// require library
require_once('../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV3($accessToken, $endpoint);

// API usage
$response = $client->getCompilers();
