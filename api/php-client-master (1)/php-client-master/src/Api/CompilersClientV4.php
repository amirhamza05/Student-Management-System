<?php
/**
 * CompilersClientV4
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
 *  Copyright 2017 Sphere Research Sp z o.o.
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

class CompilersClientV4
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
	protected $version = 'v4';
	
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
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function test()
	{
	    $response = $this->apiClient->callApi('/test', 'GET', null, null, null, null, null);

	    if ( ! in_array('message', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}
	
	/**
	 * List of all compilers
	 *
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function getCompilers()
	{
	    $response = $this->apiClient->callApi('/compilers', 'GET', null, null, null, null, null);

		if ( ! in_array('items', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}
	
	/**
	 * Create a new submission
	 *
	 * @param string $source source code (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param string $input data that will be given to the program on stdin, default: empty (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int $timeLimit time limit, default: 5 (optional)
	 * @param int $memoryLimit memory limit, default: no limit (optional)
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function createSubmission($source, $compilerId, $input="", $priority=null, $timeLimit=null, $memoryLimit=null)
	{
		return $this->_createSubmission($source, $compilerId, $input, $priority, [], $timeLimit, $memoryLimit);
	}
	
	/**
	 * Create a new submission with multi files
	 *
	 * @param string[] $files files [fileName=>fileContent] (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param string $input data that will be given to the program on stdin, default: empty (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int $timeLimit time limit, default: 5 (optional)
	 * @param int $memoryLimit memory limit, default: no limit (optional)
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function createSubmissionMultiFiles($files, $compilerId, $input="", $priority=null, $timeLimit=null, $memoryLimit=null)
	{
	    return $this->_createSubmission("", $compilerId, $input, $priority, $files, $timeLimit, $memoryLimit);
	}
	
	/**
	 * Create a new submission from tar source
	 *
	 * @param string $tarSource tar(tar.gz) source (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param string $input data that will be given to the program on stdin, default: empty (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int $timeLimit time limit, default: 5 (optional)
	 * @param int $memoryLimit memory limit, default: no limit (optional)
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function createSubmissionWithTarSource($tarSource, $compilerId, $input="", $priority=null, $timeLimit=null, $memoryLimit=null)
	{
	    return $this->_createSubmission($tarSource, $compilerId, $input, $priority, [], $timeLimit, $memoryLimit);
	}
	
	/**
	 * Create a new submission
	 *
	 * @param string $source source code (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param string $input data that will be given to the program on stdin, default: empty (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param string[] $files files [fileName=>fileContent], default: empty (optional)
	 * @param int $timeLimit time limit, default: 5 (optional)
	 * @param int $memoryLimit memory limit, default: no limit (optional)
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	private function _createSubmission($source, $compilerId, $input="", $priority=null, $files=[], $timeLimit=null, $memoryLimit=null)
	{
	    $postParams = [
	        'source' => $source,
	        'compilerId' => $compilerId,
	        'input' => $input
	    ];
	    $filesData = [];
	    
	    if (isset($priority)) {
	        $postParams['priority'] = intval($priority);
	    }
	    
	    if (!empty($files) && is_array($files)) {
	        $filesData['files'] = [];
	        foreach($files as $name => $content) {
	            if(is_string($content) === false) {
	                continue;
	            }
	            $filesData['files'][$name] = $content;
	        }
	        if(!empty($filesData['files'])) {
	            $postParams['source'] = '';
	        }
	    }
	    
	    if (isset($timeLimit)) {
	        $postParams['timeLimit'] = intval($timeLimit);
	    }
	    
	    if (isset($memoryLimit)) {
	        $postParams['memoryLimit'] = intval($memoryLimit);
	    }
	    
	    $response = $this->apiClient->callApi('/submissions', 'POST', null, null, $postParams, $filesData, null);
	    
	    if ( ! in_array('id', array_keys($response))) {
	        throw new SphereEngineResponseException("unexpected error", 400);
	    }
	    
	    return $response;
	}
	
	/**
	 * Fetch submission details
	 *
	 * @param int $id Submission id (required)
	 * @throws SphereEngineResponseException
	 * @return array
	 */
	public function getSubmission($id)
	{
		$urlParams = [
				'id' => $id
		];
		
		$response = $this->apiClient->callApi('/submissions/{id}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('result', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Fetch raw stream
	 *
	 * @param int $id Submission id (required)
	 * @param string $stream name of the stream, source|input|output|error|cmpinfo (required)
	 * @throws SphereEngineResponseException
	 * @return string file content
	 */
	public function getSubmissionStream($id, $stream)
	{
		if (!in_array($stream, ['source', 'input', 'output', 'error', 'cmpinfo'])) {
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
	 * @throws SphereEngineResponseException
	 * @throws \InvalidArgumentException for invalid $ids param
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
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}
}
