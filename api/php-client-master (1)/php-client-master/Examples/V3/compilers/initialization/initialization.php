<?php
/**
 * Example presents usage of the successful initialization of 
 * Sphere Engine Compilers API client
*/

use SphereEngine\Api\CompilersClientV3;

// require library
require_once('../../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV3($accessToken, $endpoint);
