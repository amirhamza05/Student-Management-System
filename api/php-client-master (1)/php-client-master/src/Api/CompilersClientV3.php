<?php
/**
 * CompilersClientV3
 * 
 * PHP version 5
 *
 * @category Class
 * @package  SphereEngine\Api
 * @author   https://github.com/sphere-engine/php-client
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/sphere-engine/php-client
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

class CompilersClientV3
{
	/**
	 * Common utilities for all Sphere Engine modules
	 */
	use ApiCommonsTrait;

	/**
	 * API Client
	 * @var ApiClient instance of the ApiClient
	 */
	protected $apiClient;
	
	/**
	 * API module
	 * @var String module name of the API
	 */
	protected $module = 'compilers';
	
	/**
	 * API version
	 * @var String version of the API
	 */
	protected $version = 'v3';
	
	/**
	 * Constructor
	 * 
	 * @param string $accessToken Access token to Sphere Engine service
	 * @param string $endpoint link to the endpoint
	 * @param boolean $strictEndpoint strict endpoint (false if you need use another endpoint than sphere-engine.com)
	 */
	function __construct($accessToken, $endpoint, $strictEndpoint = true)
	{
		$this->apiClient = new ApiClient($accessToken, $this->createEndpointLink('compilers', $endpoint, $strictEndpoint));
	}
	
	/**
	 * Test method
	 *
	 * @throws SphereEngine\SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return string
	 */
	public function test()
	{
	    $response = $this->apiClient->callApi('/test', 'GET', null, null, null, null, null);

		if ( ! in_array('answerToLifeAndEverything', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
	
	/**
	 * List of all compilers
	 *
	 * @throws SphereEngine\SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return array
	 */
	public function getCompilers()
	{
	    $response = $this->apiClient->callApi('/compilers', 'GET', null, null, null, null, null);

		if ( ! in_array('items', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
	
	/**
	 * Create a new submission
	 *
	 * @param string $source source code, default: empty (optional)
	 * @param int $compiler Compiler ID, default: 1 (C++) (optional)
	 * @param string $input data that will be given to the program on stdin, default: empty (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param bool $experimental execute in experimental mode, default: false (optional)
	 * @throws SphereEngine\SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return string
	 */
	public function createSubmission($source="", $compiler=1, $input="", $priority=null, $experimental=null)
	{
		$postParams = [
				'sourceCode' => $source,
				'language' => $compiler,
				'input' => $input
		];

		if (isset($priority)) {
			$postParams['priority'] = intval($priority);
		}
		
		if (isset($experimental)) {
			$postParams['experimental'] = ($experimental) ? 1 : 0;
		}

		$response = $this->apiClient->callApi('/submissions', 'POST', null, null, $postParams, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
	
	/**
	 * Fetch submission details
	 *
	 * @param int $id Submission id (required)
	 * @param bool $withSource determines whether source code of the submission should be returned, default: false (optional)
	 * @param bool $withInput determines whether input data of the submission should be returned, default: false (optional)
	 * @param bool $withOutput determines whether output produced by the program should be returned, default: false (optional)
	 * @param bool $withStderr determines whether stderr should be returned, default: false (optional)
	 * @param bool $withCmpinfo determines whether compilation information should be returned, default: false (optional)
	 * @throws SphereEngine\SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngine\SphereEngineResponseException with the code 404 for non existing submission
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return string
	 */
	public function getSubmission($id, $withSource=false, $withInput=false, $withOutput=false, $withStderr=false, $withCmpinfo=false)
	{
		$urlParams = [
				'id' => $id
		];
		$queryParams = [
				'withSource' => ($withSource) ? "1" : "0",
				'withInput' => ($withInput) ? "1" : "0",
				'withOutput' => ($withOutput) ? "1" : "0",
				'withStderr' => ($withStderr) ? "1" : "0",
				'withCmpinfo' => ($withCmpinfo) ? "1" : "0"
		];
		
		$response = $this->apiClient->callApi('/submissions/{id}', 'GET', $urlParams, $queryParams, null, null, null);

		if ( ! in_array('status', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Fetch raw stream
	 *
	 * @param int $id Submission id (required)
	 * @param string $stream name of the stream, input|output|stderr|cmpinfo|source (required)
	 * @throws SphereEngine\SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngine\SphereEngineResponseException with the code 404 for non existing submission or stream
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return file
	 */
	public function getSubmissionStream($id, $stream)
	{
		if (!in_array($stream, ['input', 'stdin', 'output', 'stdout', 'stderr', 'error', 'cmpinfo', 'source'])) {
			throw new SphereEngineResponseException("stream doesn't exist", 404);
		}
		$urlParams = [
				'id' => $id,
				'stream' => $stream
		];
		$response = $this->apiClient->callApi('/submissions/{id}/{stream}', 'GET', $urlParams, null, null, null, null, 'file');

		return $response;
	}
	
	/**
	 * Fetches status of multiple submissions (maximum 20 ids)
	 *
	 * @param array|int $ids Submission ids (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws \InvalidArgumentException for invalid $ids param
	 * @throws SphereEngine\SphereEngineResponseException with the code 422 for invalid or empty response
	 * @return string
	 */
	public function getSubmissions($ids)
	{
		if(is_array($ids) === false && is_int($ids) === false) {
			throw new \InvalidArgumentException('getSubmissions method accepts only array or integer.');
		}
		
		if(is_array($ids)) {
			$ids = array_map('intval', $ids);
			$ids = array_filter($ids, function ($id) { return $id > 0; });
			$ids = array_unique($ids);
			$ids = implode(',', $ids);
		}
		
		$queryParams = [
				'ids' => $ids
		];
	
		$response = $this->apiClient->callApi('/submissions', 'GET', null, $queryParams, null, null, null);

		if ( ! in_array('items', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
}
