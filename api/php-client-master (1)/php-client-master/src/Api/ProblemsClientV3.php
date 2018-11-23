<?php
/**
 * ProblemsClientV3
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

class ProblemsClientV3
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
	protected $version = 'v3';

    /**
     * Constructor
     * @param string $accessToken Access token to Sphere Engine service
     * @param string $endpoint link to the endpoint
     * @param boolean $strictEndpoint strict endpoint (false if you need use another endpoint than sphere-engine.com)
     */
	function __construct($accessToken, $endpoint, $strictEndpoint = true)
	{
	    $this->apiClient = new ApiClient($accessToken, $this->createEndpointLink('problems', $endpoint, $strictEndpoint));
	}

	/**
	 * Test method
	 *
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @return API response
	 */
	public function test()
	{
	    $response = $this->apiClient->callApi('/test', 'GET', null, null, null, null, null);

		if ( ! in_array('message', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * List of all compilers
	 *
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @return API response
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
	 * List of all judges
	 *
	 * @param int $limit limit of judges to get, default: 10, max: 100 (optional)
	 * @param int $offset offset, default: 0 (optional)
	 * @param string $type Judge type, enum: testcase|master, default: testcase (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @return API response
	 */
	public function getJudges($limit=10, $offset=0, $type="testcase")
	{
		$queryParams = [
				'limit' => $limit,
				'offset' => $offset,
				'type' => $type
		];
		$response = $this->apiClient->callApi('/judges', 'GET', null, $queryParams, null, null, null);

		if ( ! in_array('paging', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Create a new judge
	 *
	 * @param string $source source code (required)
	 * @param int $compiler Compiler ID, default: 1 (C++) (optional)
	 * @param string $type Judge type, testcase|master, default: testcase (optional)
	 * @param string $name Judge name, default: empty (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 400 for empty source code
	 * @throws SphereEngineResponseException with the code 404 for non existing compiler
	 * @return API response
	 */
	public function createJudge($source, $compiler=1, $type="testcase", $name="")
	{
		if ($source == '') {
			throw new SphereEngineResponseException("empty source", 400);
		}

		$postParams = [
				'source' => $source,
				'compilerId' => $compiler,
				'type' => $type,
				'name' => $name,
		];
		$response = $this->apiClient->callApi('/judges', 'POST', null, null, $postParams, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Get judge details
	 *
	 * @param int $id Judge ID (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 404 for non existing judge
	 * @throws SphereEngineResponseException with the code 403 for retrieving foreign judge details
	 * @return API response
	 */
	public function getJudge($id)
	{
		$urlParams = [
				'id' => $id
		];
		$response = $this->apiClient->callApi('/judges/{id}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Update judge
	 *
	 * @param int $id Judge ID (required)
	 * @param string $source source code (optional)
	 * @param int $compiler Compiler ID (optional)
	 * @param string $name Judge name (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for modifying foreign judge
	 * @throws SphereEngineResponseException with the code 404 for non existing judge
	 * @throws SphereEngineResponseException with the code 404 for non existing compiler
	 * @throws SphereEngineResponseException with the code 400 for empty source code
	 * @return API response
	 */
	public function updateJudge($id, $source=null, $compiler=null, $name=null)
	{
		if (isset($source) && $source == '') {
			throw new SphereEngineResponseException("empty source", 400);
		}

		$urlParams = [
				'id' => $id
		];
		$postParams = [];
		if (isset($source)) $postParams['source'] = $source;
		if (isset($compiler)) $postParams['compilerId'] = $compiler;
		if (isset($name)) $postParams['name'] = $name;

		$response = $this->apiClient->callApi('/judges/{id}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * List of all problems
	 *
	 * @param int $limit limit of problems to get, default: 10, max: 100 (optional)
	 * @param int $offset offset, default: 0 (optional)
	 * @param bool $shortBody determines whether shortened body should be returned, default: false (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @return API response
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
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Create a new problem
	 *
	 * @param string $code Problem code (required)
	 * @param string $name Problem name (required)
	 * @param string $body Problem body (optional)
	 * @param string $type Problem type, enum: binary|min|max, default: binary (optional)
	 * @param bool $interactive interactive problem flag, default: 0 (optional)
	 * @param int $masterjudgeId Masterjudge ID, default: 1001 (i.e. Score is % of correctly solved testcases) (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 400 for empty problem code
	 * @throws SphereEngineResponseException with the code 400 for empty problem name
	 * @throws SphereEngineResponseException with the code 400 for not unique problem code
	 * @throws SphereEngineResponseException with the code 400 for invalid problem code
	 * @throws SphereEngineResponseException with the code 404 for non existing masterjudge
	 * @return API response
	 */
	public function createProblem($code, $name, $body="", $type="binary", $interactive=false, $masterjudgeId=1001)
	{
		if ($code == '') {
			throw new SphereEngineResponseException("empty code", 400);
		} elseif ($name == '') {
			throw new SphereEngineResponseException("empty name", 400);
		}

		$postParams = [
				'code' => $code,
				'name' => $name,
				'body' => $body,
				'type' => $type,
				'interactive' => intval($interactive),
				'masterjudgeId' => $masterjudgeId
		];
		$response = $this->apiClient->callApi('/problems', 'POST', null, null, $postParams, null, null);

		if ( ! in_array('code', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Retrieve an existing problem
	 *
	 * @param string $code Problem code (required)
	 * @param bool $shortBody determines whether shortened body should be returned, default: false (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @return API response
	 */
	public function getProblem($code, $shortBody = false)
	{
		$urlParams = [
				'code' => $code
		];
		$queryParams = [
				'shortBody' => $shortBody
		];
		$response = $this->apiClient->callApi('/problems/{code}', 'GET', $urlParams, $queryParams, null, null, null);

		if ( ! in_array('code', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Update an existing problem
	 *
	 * @param string $code Problem code (required)
	 * @param string $name Problem name (optional)
	 * @param string $body Problem body (optional)
	 * @param string $type Problem type, enum: binary|min|max, default: binary (optional)
	 * @param bool $interactive interactive problem flag (optional)
	 * @param int $masterjudgeId Masterjudge ID (optional)
	 * @param int[] $activeTestcases list of active testcases IDs (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for modifying foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing masterjudge
	 * @throws SphereEngineResponseException with the code 400 for empty problem code
	 * @throws SphereEngineResponseException with the code 400 for empty problem name
	 * @return API response
	 */
	public function updateProblem($code, $name=null, $body=null, $type=null, $interactive=null, $masterjudgeId=null, $activeTestcases=null)
	{
		if ($code == "") {
			throw new SphereEngineResponseException("empty code", 400);
		} elseif (isset($name) && $name == "") {
			throw new SphereEngineResponseException("empty name", 400);
		}

		$urlParams = [
				'code' => $code
		];

		$postParams = [];

		if (isset($name)) $postParams['name'] = $name;
		if (isset($body)) $postParams['body'] = $body;
		if (isset($type)) $postParams['type'] = $type;
		if (isset($interactive)) $postParams['interactive'] = $interactive;
		if (isset($masterjudgeId)) $postParams['masterjudgeId'] = $masterjudgeId;
		if (isset($activeTestcases) && is_array($activeTestcases)) $postParams['activeTestcases'] = implode(',', $activeTestcases);

		$response = $this->apiClient->callApi('/problems/{code}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Update active testcases related to the problem
	 *
	 * @param string $problemCode Problem code (required)
	 * @param int[] $activeTestcases Active testcases (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for modifying foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 400 for empty problem code
	 * @return API response
	 */
	public function updateProblemActiveTestcases($problemCode, $activeTestcases)
	{
		return $this->updateProblem($problemCode, null, null, null, null, null, $activeTestcases);
	}

	/**
	 * Retrieve list of problem testcases
	 *
	 * @param string $problemCode Problem code (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for retrieving testcases of foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @return API response
	 */
	public function getProblemTestcases($problemCode)
	{
		$urlParams = [
				'problemCode' => $problemCode
		];
		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('testcases', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Create a problem testcase
	 *
	 * @param string $problemCode Problem code (required)
	 * @param string $input input data, default: empty (optional)
	 * @param string $output output data, default: empty (optional)
	 * @param float $timelimit time limit in seconds, default: 1 (optional)
	 * @param int $judgeId Judge ID, default: 1 (Ignore extra whitespaces) (optional)
	 * @param int $active if test should be active, default: true (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for adding a testcase to foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing judge
	 * @return API response
	 */
	public function createProblemTestcase($problemCode, $input="", $output="", $timelimit=1, $judgeId=1, $active=1)
	{
		$urlParams = [
				'problemCode' => $problemCode
		];
		$postParams = [
				'input' => $input,
				'output' => $output,
				'timelimit' => $timelimit,
				'judgeId' => $judgeId,
				'active' => $active
		];
		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases', 'POST', $urlParams, null, $postParams, null, null);

		if ( ! in_array('number', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Retrieve problem testcase
	 *
	 * @param string $problemCode Problem code (required)
	 * @param int $number Testcase number (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for retrieving a testcase of foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing testcase
	 * @return API response
	 */
	public function getProblemTestcase($problemCode, $number)
	{
		$urlParams = [
				'problemCode' => $problemCode,
				'number' => $number
		];
		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases/{number}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('number', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Update the problem testcase
	 *
	 * @param string $problemCode Problem code (required)
	 * @param int $number Testcase number (required)
	 * @param string $input input data (optional)
	 * @param string $output output data (optional)
	 * @param float $timelimit time limit in seconds (optional)
	 * @param int $judgeId Judge ID (optional)
	 * @param int $active if test should be active, default: true (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for retrieving a testcase of foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing testcase
	 * @throws SphereEngineResponseException with the code 404 for non existing judge
	 * @return API response
	 */
	public function updateProblemTestcase($problemCode, $number, $input=null, $output=null, $timelimit=null, $judgeId=null, $active=null)
	{
		$urlParams = [
				'problemCode' => $problemCode,
				'number' => $number
		];
		$postParams = [];
		if (isset($input)) $postParams['input'] = $input;
		if (isset($output)) $postParams['output'] = $output;
		if (isset($timelimit)) $postParams['timelimit'] = $timelimit;
		if (isset($judgeId)) $postParams['judgeId'] = $judgeId;
		if (isset($active)) $postParams['active'] = $active;

		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases/{number}', 'PUT', $urlParams, null, $postParams, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Delete the problem testcase
	 *
	 * @param string $problemCode Problem code (required)
	 * @param int $number Testcase number (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for retrieving a testcase of foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing testcase
	 * @return API response
	 */
	public function deleteProblemTestcase($problemCode, $number)
	{
		$urlParams = [
				'problemCode' => $problemCode,
				'number' => $number
		];

		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases/{number}', 'DELETE', $urlParams, null, null, null, null);

		if ( ! is_array($response) || !empty($response)) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}

	/**
	 * Retrieve Problem testcase file
	 *
	 * @param string $problemCode Problem code (required)
	 * @param int $number Testcase number (required)
	 * @param string $filename stream name (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 403 for retrieving a testcase of foreign problem
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing testcase
	 * @throws SphereEngineResponseException with the code 404 for non existing file
	 * @return file
	 */
	public function getProblemTestcaseFile($problemCode, $number, $filename)
	{
		if ( ! in_array($filename, ['input', 'stdin', 'output', 'stdout'])) {
			throw new SphereEngineResponseException("nonexisting stream", 404);
		}

		$urlParams = [
				'problemCode' => $problemCode,
				'number' => $number,
				'filename' => $filename
		];
		$response = $this->apiClient->callApi('/problems/{problemCode}/testcases/{number}/{filename}', 'GET', $urlParams, null, null, null, null, 'file');

		return $response;
	}

	/**
	 * Create a new submission
	 *
	 * @param string $problemCode Problem code (required)
	 * @param string $source source code (required)
	 * @param int $compiler Compiler ID (required)
	 * @param int $user User ID, default: account owner user (optional)
	 * @param int $priority priority of the submission, default: normal priority (eg. 5 for range 1-9) (optional)
	 * @param bool $experimental execute in experimental mode, default: false (optional)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 404 for non existing problem
	 * @throws SphereEngineResponseException with the code 404 for non existing compiler
	 * @throws SphereEngineResponseException with the code 404 for non existing user
	 * @throws SphereEngineResponseException with the code 400 for empty source code
	 * @return API response
	 */
	public function createSubmission($problemCode, $source, $compiler, $user=null, $priority=null, $experimental=null)
	{
		if ($source == "") {
			throw new SphereEngineResponseException("empty source", 400);
		}

		$postParams = [
				'problemCode' => $problemCode,
				'compilerId' => $compiler,
				'source' => $source
		];
		
		if (isset($user)) {
			$postParams['userId'] = $user;
		}
		
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
	 * @param string $id Submission ID (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
	 * @throws SphereEngineResponseException with the code 404 for non existing submission
	 * @return API response
	 */
	public function getSubmission($id)
	{
		$urlParams = [
				'id' => $id
		];
		$response = $this->apiClient->callApi('/submissions/{id}', 'GET', $urlParams, null, null, null, null);

		if ( ! in_array('id', array_keys($response))) {
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
	
	/**
	 * Fetches status of multiple submissions (maximum 20 ids)
	 *
	 * @param array|int $ids Submission ids (required)
	 * @throws SphereEngineResponseException with the code 401 for invalid access token
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
			throw new SphereEngineResponseException("invalid or empty response", 422);
		}

		return $response;
	}
}
