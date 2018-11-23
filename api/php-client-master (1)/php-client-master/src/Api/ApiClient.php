<?php
/**
 * ApiClient
 * 
 * PHP version 5
 *
 * @category Class
 * @package  SphereEngine\Api
 * @author   https://github.com/sphere-engine/sphereengine-api-php-client
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/sphere-engine/sphereengine-api-php-client
 */
/**
 *  Copyright 2015 Sphere Research Sp z o.o.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace SphereEngine\Api;

use SphereEngine\Api\Model\HttpApiResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class ApiClient
{
	protected $baseUrl;
	protected $accessToken;
	protected $userAgent;
	protected $extraPost = [];
	public static $PROTOCOL = "http";
	
    /**
     * Constructor
     * @param string $accessToken Access token to Sphere Engine service
     * @param string $version version of the API
     * @param string $endpoint link to the endpoint
     */
	function __construct($accessToken, $endpoint)
	{
		$this->accessToken = $accessToken;
		$this->baseUrl = $this->buildBaseUrl($endpoint);
		$this->userAgent = "SphereEngine";
	}
	
	protected function buildBaseUrl($endpoint)
	{
		return self::$PROTOCOL . '://' . $endpoint;
	}
	
	/**
	 * Make the HTTP call (Sync)
	 * @param string $resourcePath path to method endpoint
	 * @param string $method       method to call
	 * @param array  $queryParams  parameters to be place in query URL
	 * @param array  $postData     parameters to be placed in POST body
	 * @param array  $filesData    parameters to be placed in FILES
	 * @param array  $headerParams parameters to be place in request header
	 * @param string $responseType expected response type of the endpoint
	 * @throws \SphereEngine\Api\SphereEngineResponseException on a non 4xx response
	 * @throws \SphereEngine\Api\SphereEngineConnectionException on a non 5xx response
	 * @return mixed
	 */
	public function callApi($resourcePath, $method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType=null)
	{
		$httpResponse = $this->makeHttpCall($resourcePath, $method, $urlParams, $queryParams, $postData, $filesData, $headerParams);
		$response = $this->processResponse($httpResponse, $responseType);
		return $response;
	}
	
	/**
	 * extra POST data only for the next request
	 *
	 * @param array $data
	 */
	public function addExtraPost($data) {
	    $this->extraPost = $data;
	}

	/**
	 * Process response data from HTTP callApi
	 * @param \SphereEngine\Api\Model\HttpApiResponse	$response 	response from http api callApi
	 * @throws \SphereEngine\Api\SphereEngineResponseException on a non 4xx response
	 * @throws \SphereEngine\Api\SphereEngineConnectionException on a non 5xx response
	 * @return mixed
	 */
	protected function processResponse(HttpApiResponse $response, $responseType)
	{
		// curl connection errors (invalid port, connection refused, timeout)
	    if ($response->error !== null) {
			throw new SphereEngineConnectionException($response->error, 0);
		}

		// sphere engine errors
	    if ($response->httpCode >= 400 && $response->httpCode <= 499) {
	        $httpBody = json_decode($response->httpBody, true);
	        $errorCode = isset($httpBody['error_code']) ? $httpBody['error_code'] : 0;
	        throw new SphereEngineResponseException($httpBody['message'], $response->httpCode, $errorCode);
	    } elseif ($response->httpCode >= 500 && $response->httpCode <= 599) {
	        throw new SphereEngineConnectionException('Connection error', $response->httpCode);
	    }

		// sphere engine success
		if ($response->httpCode >= 200 && $response->httpCode <= 299) {
			if ($responseType == 'file') {
			    return $response->httpBody;
			}
			
			if ($response->contentType !== 'application/json') {
			    throw new SphereEngineConnectionException('Response type is not application/json', $response->httpCode);
			}
			
			$body = json_decode($response->httpBody, true);

			if($body === null) {
			    throw new SphereEngineConnectionException('Invalid response', $response->httpCode);
			}
			
			return $body;
		}

		// other errors
		throw new SphereEngineConnectionException('Unknown error', $response->httpCode);
	}

	/**
	 * Make the HTTP call
	 * @param string $resourcePath path to method endpoint
	 * @param string $method       method to call
	 * @param array  $queryParams  parameters to be place in query URL
	 * @param array  $postData     parameters to be placed in POST body
	 * @param array  $filesData    parameters to be placed in FILES
	 * @param array  $headerParams parameters to be place in request header
	 * @param string $responseType expected response type of the endpoint
	 * @return \SphereEngine\Api\Model\HttpApiResponse
	 */
	protected function makeHttpCall($resourcePath, $method, $urlParams, $queryParams, $postData, $filesData, $headerParams)
	{
	    $headers = array();
	
	    // construct the http header
	    $headerParams = array(
		   'User-Agent' => 'SphereEngine/ClientPHP'
        );
	    
	    foreach ($headerParams as $key => $val) {
	        $headers[] = "$key: $val";
	    }
	
	    // fill url params with proper values
	    if (is_array($urlParams)) {
    	    foreach($urlParams as $param => $value) {
    	        $resourcePath = str_replace("{" . $param . "}", $value, $resourcePath);
    	    }
	    }
	    
	    // create a complete url
	    $client = new Client([
	        'base_uri' => rtrim($this->baseUrl, '/') . '/',
	        'timeout'  => 3.0,
	    ]);
	    
	    if (! in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
	        throw new \Exception('Method ' . $method . ' is not recognized.');
	    }
	    
	    $queryParams['access_token'] = $this->accessToken;
	    
	    if (!empty($this->extraPost)) {
	        $postData = array_merge($postData, $this->extraPost);
	        unset($this->extraPost);
	    }
	    
	    $error = null;
	    
	    $multipart = [];
	    if (! empty($filesData)) {
	        $multipart = array_merge($multipart, $this->createMultipartArray($postData));
	        $multipart = array_merge($multipart, $this->createMultipartArray($filesData, true));
	    }
	    
	    try {
	        
	        $options = [
    	        'query' => $queryParams,
    	        'headers' => $headers,
    	        'verify' => false,
	            'http_errors' => false,
	        ];
	        
	        // multipart/form-data or application/x-www-form-urlencoded
	        if (! empty($multipart)) {
	            $options['multipart'] = $multipart;
	        } else {
	            $options['form_params'] = $postData;
	        }
	        
	        $response = $client->request($method, ltrim($resourcePath, '/'), $options);
	    
    	    $response_info = [
    	        'http_code' => $response->getStatusCode(),
    	        'content_type' => $response->getHeaderLine('Content-Type'),
    	    ];
    	    
    	    $http_body = $response->getBody()->getContents();
	    
	    } catch (RequestException $e) {
	        $http_body = '';
	        $response_info = [
	            'http_code' => 0,
	            'content_type' => '',
	        ];
	        
	        $error = $e->getMessage();
	    }
	    
	    return new HttpApiResponse($response_info['http_code'], $response_info['content_type'], $http_body, $error);
	}
	
	/**
	 * Create multipart array for multipart guzzle request
	 * 
	 * @param array $data post or files data
	 * @param boolean $asFiles
	 * @return array
	 */
	protected function createMultipartArray($data, $asFiles = false) {
	    $multipart = [];
	    foreach ($data as $key => $value) {
	        if(is_array($value)) {
	            foreach($value as $k => $v) {
	                $part = [
	                    'name' => "{$key}[{$k}]",
	                    'contents' => $v,
                    ];
	                if($asFiles) {
	                    $part['filename'] = $k;
	                }
                    $multipart[] = $part;
	            }
	            continue;
	        }
	        
	        $part = [
	            'name' => $key,
	            'contents' => $value,
	        ];
	        if($asFiles) {
	            $part['filename'] = $key;
	        }
	        $multipart[] = $part;
	    }

	    return $multipart;
	}
}
