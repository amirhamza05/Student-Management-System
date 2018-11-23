<?php
/**
 * ProblemsClientV4
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

class ProblemsClientV4
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
	protected $module = 'problems';

	/**
	 * API version
	 * @var String version of the API
	 */
	protected $version = 'v4';

    /**
     * Constructor
     * @param string $accessToken Access token to Sphere Engine service
     * @param string $endpoint link to the endpoint
     * @param boolean $strictEndpoint strict endpoint (false if you need use another endpoint than sphere-engine.com)
     * @throws \RuntimeException
     */
	function __construct($accessToken, $endpoint, $strictEndpoint = true)
	{
	    $this->apiClient = new ApiClient($accessToken, $this->createEndpointLink('problems', $endpoint, $strictEndpoint));
	}

	/**
	 * Test method
	 *
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
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
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
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
	 * List of all judges
	 *
	 * @param int $limit limit of judges to get, default: 10, max: 100 (optional)
	 * @param int $offset offset, default: 0 (optional)
	 * @param int $typeId Judge type, enum: 0-test case|1-master, default: 0 (test case) (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getJudges($limit=10, $offset=0, $typeId=0)
	{
		$queryParams = [
				'limit' => $limit,
				'offset' => $offset,
				'typeId' => $typeId
		];
		$response = $this->apiClient->callApi('/judges', 'GET', null, $queryParams, null, null, null);

		if ( ! in_array('paging', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Create a new judge
	 *
	 * @param string $source source code (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param int $typeId Judge type, enum: 0-test case|1-master, default: 0 (test case) (optional)
	 * @param string $name Judge name, default: empty (optional)
	 * @param string $shared shared, default: false (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createJudge($source, $compilerId, $typeId=0, $name="", $shared = false)
	{
		if ($source == '') {
			throw new SphereEngineResponseException("empty source", 400);
		}

		$postParams = [
				'source' => $source,
				'compilerId' => $compilerId,
				'typeId' => $typeId,
				'name' => $name,
		        'shared' => $shared ? true : false,
		];
		$response = $this->apiClient->callApi('/judges', 'POST', null, null, $postParams, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Get judge details
	 *
	 * @param int $id Judge ID (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getJudge($id)
	{
		$urlParams = [
				'id' => $id
		];
		$response = $this->apiClient->callApi('/judges/{id}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}
	
	/**
	 * Retrieve judge file
	 *
	 * @param int $id Judge ID (required)
	 * @param string $filename stream name (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return string file
	 */
	public function getJudgeFile($id, $filename)
	{
	    if ( ! in_array($filename, ['source'])) {
	        throw new SphereEngineResponseException("non existing stream", 404);
	    }
	    
	    $urlParams = [
	        'id' => $id,
	        'filename' => $filename
	    ];
	    $response = $this->apiClient->callApi('/judges/{id}/{filename}', 'GET', $urlParams, null, null, null, null, 'file');
	    
	    return $response;
	}

	/**
	 * Update judge
	 *
	 * @param int $id Judge ID (required)
	 * @param string $source source code (optional)
	 * @param int $compilerId Compiler ID (optional)
	 * @param string $name Judge name (optional)
	 * @param string $shared shared (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function updateJudge($id, $source=null, $compilerId=null, $name=null, $shared=null)
	{
		if (isset($source) && $source == '') {
			throw new SphereEngineResponseException("empty source", 400);
		}

		$urlParams = [
				'id' => $id
		];
		$postParams = [];
		if (isset($source)) $postParams['source'] = $source;
		if (isset($compilerId)) $postParams['compilerId'] = $compilerId;
		if (isset($name)) $postParams['name'] = $name;
		if (isset($shared)) $postParams['shared'] = $shared ? true : false;
		
		$response = $this->apiClient->callApi('/judges/{id}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * List of all problems
	 *
	 * @param int $limit limit of problems to get, default: 10, max: 100 (optional)
	 * @param int $offset offset, default: 0 (optional)
	 * @param bool $shortBody determines whether shortened body should be returned, default: false (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getProblems($limit=10, $offset=0, $shortBody = false)
	{
		$queryParams = [
				'limit' => $limit,
				'offset' => $offset,
				'shortBody' => $shortBody
		];
		$response = $this->apiClient->callApi('/problems', 'GET', null, $queryParams, null, null, null);

		if ( ! in_array('paging', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Create a new problem
	 *
	 * @param string $name Problem name (required)
	 * @param int $masterjudgeId Masterjudge ID (required)
	 * @param string $body Problem body (optional)
	 * @param int $typeId Problem type, enum: 0-binary|1-minimize|2-maximize, default: 0 (binary) (optional)
	 * @param bool $interactive interactive problem flag, default: false (optional)
	 * @param string $code [deprecated] Problem code (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createProblem($name, $masterjudgeId, $body="", $typeId=0, $interactive=false, $code=null)
	{
		if ($code == '') {
			throw new SphereEngineResponseException("empty code", 400);
		}
		
		if ($name == '') {
			throw new SphereEngineResponseException("empty name", 400);
		}

		$postParams = [
				'name' => $name,
				'body' => $body,
				'typeId' => $typeId,
				'interactive' => intval($interactive),
				'masterjudgeId' => $masterjudgeId
		];

		if ($code !== null) {
			$postParams['code'] = $code;
		}

		$response = $this->apiClient->callApi('/problems', 'POST', null, null, $postParams, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Retrieve an existing problem
	 *
	 * @param int $id Problem ID (required)
	 * @param bool $shortBody determines whether shortened body should be returned, default: false (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getProblem($id, $shortBody = false)
	{
		$urlParams = [
				'id' => $id
		];
		$queryParams = [
				'shortBody' => $shortBody
		];
		$response = $this->apiClient->callApi('/problems/{id}', 'GET', $urlParams, $queryParams, null, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Update an existing problem
	 *
	 * @param int $id Problem ID (required)
	 * @param string $name Problem name (optional)
	 * @param int $masterjudgeId Masterjudge ID (optional)
	 * @param string $body Problem body (optional)
	 * @param int $typeId Problem type, enum: 0-binary|1-minimize|2-maximize (optional)
	 * @param bool $interactive interactive problem flag (optional)
	 * @param int[] $activeTestcases list of active testcases IDs (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function updateProblem($id, $name=null, $masterjudgeId=null, $body=null, $typeId=null, $interactive=null, $activeTestcases=null)
	{
		if ($id == "") {
			throw new SphereEngineResponseException("empty id", 400);
		} elseif (isset($name) && $name == "") {
			throw new SphereEngineResponseException("empty name", 400);
		}

		$urlParams = [
				'id' => $id
		];

		$postParams = [];

		if (isset($name)) $postParams['name'] = $name;
		if (isset($body)) $postParams['body'] = $body;
		if (isset($typeId)) $postParams['typeId'] = $typeId;
		if (isset($interactive)) $postParams['interactive'] = intval($interactive);
		if (isset($masterjudgeId)) $postParams['masterjudgeId'] = $masterjudgeId;
		if (isset($activeTestcases) && is_array($activeTestcases)) $postParams['activeTestcases'] = implode(',', $activeTestcases);

		$response = $this->apiClient->callApi('/problems/{id}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Update active testcases related to the problem
	 *
	 * @param int $problemId Problem ID (required)
	 * @param int[] $activeTestcases Active testcases (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function updateProblemActiveTestcases($problemId, $activeTestcases)
	{
		return $this->updateProblem($problemId, null, null, null, null, null, $activeTestcases);
	}

	/**
	 * Retrieve list of problem testcases
	 *
	 * @param int $problemId Problem ID (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getProblemTestcases($problemId)
	{
		$urlParams = [
				'problemId' => $problemId
		];
		$response = $this->apiClient->callApi('/problems/{problemId}/testcases', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('testcases', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Create a problem testcase
	 *
	 * @param int $problemId Problem ID (required)
	 * @param string $input input data, default: empty (optional)
	 * @param string $output output data, default: empty (optional)
	 * @param float $timeLimit time limit in seconds, default: 1 (optional)
	 * @param int $judgeId Judge ID, default: 1 (Ignore extra whitespaces) (optional)
	 * @param bool $active if test should be active, default: true (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createProblemTestcase($problemId, $input="", $output="", $timeLimit=1, $judgeId=1, $active=true)
	{
		$urlParams = [
				'problemId' => $problemId
		];
		$postParams = [
				'input' => $input,
				'output' => $output,
				'timeLimit' => $timeLimit,
				'judgeId' => $judgeId,
				'active' => intval($active)
		];
		$response = $this->apiClient->callApi('/problems/{problemId}/testcases', 'POST', $urlParams, null, $postParams, null, null);

		if ( ! in_array('number', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Retrieve problem test case
	 *
	 * @param int $problemId Problem ID (required)
	 * @param int $number Test case number (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getProblemTestcase($problemId, $number)
	{
		$urlParams = [
				'problemId' => $problemId,
				'number' => $number
		];
		$response = $this->apiClient->callApi('/problems/{problemId}/testcases/{number}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('number', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Update the problem test case
	 *
	 * @param int $problemId Problem ID (required)
	 * @param int $number Test case number (required)
	 * @param string $input input data (optional)
	 * @param string $output output data (optional)
	 * @param float $timeLimit time limit in seconds (optional)
	 * @param int $judgeId Judge ID (optional)
	 * @param bool $active if test should be active, default: true (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function updateProblemTestcase($problemId, $number, $input=null, $output=null, $timeLimit=null, $judgeId=null, $active=null)
	{
		$urlParams = [
				'problemId' => $problemId,
				'number' => $number
		];
		$postParams = [];
		if (isset($input)) $postParams['input'] = $input;
		if (isset($output)) $postParams['output'] = $output;
		if (isset($timeLimit)) $postParams['timeLimit'] = $timeLimit;
		if (isset($judgeId)) $postParams['judgeId'] = $judgeId;
		if (isset($active)) $postParams['active'] = intval($active);

		$response = $this->apiClient->callApi('/problems/{problemId}/testcases/{number}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Delete the problem testcase
	 *
	 * @param int $problemId Problem ID (required)
	 * @param int $number Testcase number (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function deleteProblemTestcase($problemId, $number)
	{
		$urlParams = [
				'problemId' => $problemId,
				'number' => $number
		];

		$response = $this->apiClient->callApi('/problems/{problemId}/testcases/{number}', 'DELETE', $urlParams, null, null, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}

	/**
	 * Retrieve Problem testcase file
	 *
	 * @param int $problemId Problem ID (required)
	 * @param int $number Testcase number (required)
	 * @param string $filename stream name (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return string file
	 */
	public function getProblemTestcaseFile($problemId, $number, $filename)
	{
		if ( ! in_array($filename, ['input', 'output'])) {
			throw new SphereEngineResponseException("non existing stream", 404);
		}

		$urlParams = [
				'problemId' => $problemId,
				'number' => $number,
				'filename' => $filename
		];
		$response = $this->apiClient->callApi('/problems/{problemId}/testcases/{number}/{filename}', 'GET', $urlParams, null, null, null, null, 'file');

		return $response;
	}

	/**
	 * Create a new submission
	 *
	 * @param int $problemId Problem ID (required)
	 * @param string $source source code (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int[] $tests tests to run, default: empty (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createSubmission($problemId, $source, $compilerId, $priority=null, $tests=[])
	{
	    if ($source == "") {
	        throw new SphereEngineResponseException("empty source", 400);
	    }
	    
		return $this->_createSubmission($problemId, $source, $compilerId, $priority, [], $tests);
	}
	
	/**
	 * Create a new submission with multi files
	 *
	 * @param int $problemId Problem ID (required)
	 * @param string[] $files files [fileName=>fileContent] (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int[] $tests tests to run, default: empty (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createSubmissionMultiFiles($problemId, $files, $compilerId, $priority=null, $tests=[])
	{
	    
	    if(is_array($files) === false || empty($files)) {
	        throw new SphereEngineResponseException("empty source", 400);
	    }
	    
	    return $this->_createSubmission($problemId, '', $compilerId, $priority, $files, $tests);
	}
	
	/**
	 * Create a new submission from tar source
	 *
	 * @param int $problemId Problem ID (required)
	 * @param string $source tar(tar.gz) source (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param int[] $tests tests to run, default: empty (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function createSubmissionWithTarSource($problemId, $tarSource, $compilerId, $priority=null, $tests=[])
	{
	    
	    if ($tarSource == "") {
	        throw new SphereEngineResponseException("empty source", 400);
	    }
	    
	    return $this->_createSubmission($problemId, $tarSource, $compilerId, $priority, [], $tests);
	}
	
	/**
	 * Create a new submission
	 *
	 * @param int $problemId Problem ID (required)
	 * @param string $source source code (required)
	 * @param int $compilerId Compiler ID (required)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param string[] $files files [fileName=>fileContent], default: empty (optional)
	 * @param int[] $tests tests to run, default: empty (optional)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	private function _createSubmission($problemId, $source, $compilerId, $priority=null, $files=[], $tests=[])
	{
	    $postParams = [
	        'problemId' => $problemId,
	        'compilerId' => $compilerId,
	        'source' => $source
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
	        if(!empty($postParams['files'])) {
	            $postParams['source'] = '';
	        }
	    }
	    
	    if (!empty($tests) && is_array($tests)) {
	        $postParams['tests'] = implode(',', $tests);
	    }
	    
	    $response = $this->apiClient->callApi('/submissions', 'POST', null, null, $postParams, $filesData, null);
	    
	    if ( ! in_array('id', array_keys($response))) {
	        throw new SphereEngineResponseException("unexpected error", 400);
	    }
	    
	    return $response;
	}

	/**
	 * Update a submission
	 *
	 * @param int $id Submission ID (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function updateSubmission($id)
	{
	    $urlParams = [
	        'id' => $id
	    ];
	    
	    $response = $this->apiClient->callApi('/submissions/{id}', 'PUT', $urlParams, null, [], null, null);
	    
	    if ( ! is_array($response) || !empty($response)) {
	        throw new SphereEngineResponseException("unexpected error", 400);
	    }
	    
	    return $response;
	}
	
	/**
	 * Fetch submission details
	 *
	 * @param string $id Submission ID (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return mixed API response
	 */
	public function getSubmission($id)
	{
		$urlParams = [
				'id' => $id
		];
		$response = $this->apiClient->callApi('/submissions/{id}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("unexpected error", 400);
		}

		return $response;
	}
	
	/**
	 * Retrieve submission file
	 *
	 * @param int $id Submission ID (required)
	 * @param string $filename stream name (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @return string file
	 */
	public function getSubmissionFile($id, $filename)
	{
	    if ( ! in_array($filename, ['source', 'output', 'error', 'cmpinfo', 'debug'])) {
	        throw new SphereEngineResponseException("non existing stream", 404);
	    }
	    
	    $urlParams = [
	        'id' => $id,
	        'filename' => $filename
	    ];
	    $response = $this->apiClient->callApi('/submissions/{id}/{filename}', 'GET', $urlParams, null, null, null, null, 'file');
	    
	    return $response;
	}
	
	/**
	 * Fetches status of multiple submissions (maximum 20 ids)
	 *
	 * @param array|int $ids Submission ids (required)
	 * @throws SphereEngineResponseException
	 * @throws SphereEngineConnectionException
	 * @throws \InvalidArgumentException for invalid $ids param
	 * @return mixed
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
