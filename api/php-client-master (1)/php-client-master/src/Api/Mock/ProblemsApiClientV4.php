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

namespace SphereEngine\Api\Mock;

use SphereEngine\Api\ApiClient;
use SphereEngine\Api\SphereEngineResponseException;
use SphereEngine\Api\SphereEngineConnectionException;

class ProblemsApiClientV4 extends ApiClient
{	
	use ApiClientTrait;

	protected $version = 'V4';
	
	/**
	 * Mock HTTP call
	 *
	 * @param string $resourcePath path to method endpoint
	 * @param string $method       method to call
	 * @param array  $queryParams  parameters to be place in query URL
	 * @param array  $postData     parameters to be placed in POST body
	 * @param array  $filesData    parameters to be placed in FILES
	 * @param array  $headerParams parameters to be place in request header
	 * @param string $responseType expected response type of the endpoint
	 * @return mixed
	 */
	public function makeHttpCall($resourcePath, $method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType=null)
	{
		if ( ! $this->isAccessTokenCorrect() ) {
			return $this->getMockData('unauthorizedAccess');
		}

		$queryParams['access_token'] = $this->accessToken;

		if ($resourcePath == '/test') {
		    return $this->mockTestMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/compilers') {
		    return $this->mockCompilersMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		}
		// MOCKS FOR PROBLEMS 
		elseif ($resourcePath == '/problems') {
		    return $this->mockProblemsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/problems/{id}') {
		    return $this->mockProblemMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/problems/{problemId}/testcases') {
		    return $this->mockProblemTestcasesMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/problems/{problemId}/testcases/{number}') {
		    return $this->mockProblemTestcaseMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/problems/{problemId}/testcases/{number}/{filename}') {
		    return $this->mockProblemTestcaseFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		}
		// MOCKS FOR PROBLEMS
		elseif ($resourcePath == '/judges') {
		    return $this->mockJudgesMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/judges/{id}') {
		    return $this->mockJudgeMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/judges/{id}/{filename}') {
		    return $this->mockJudgeFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		}
		// MOCKS FOR SUBMISSIONS
		elseif ($resourcePath == '/submissions/{id}') {
		    return $this->mockSubmissionMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/submissions') {
		    return $this->mockSubmissionsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/submissions/{id}/{filename}') {
		    return $this->mockSubmissionFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
	    } else {
	    	throw new \Exception("Resource url beyond mock functionality");
		}
	}

	public function mockTestMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			return $this->getMockData('problems/test');
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockCompilersMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			return $this->getMockData('problems/compilers');
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockProblemsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$limit = $this->getParam($queryParams, 'limit');
			$offset = $this->getParam($queryParams, 'offset');
			$shortBody = $this->getParam($queryParams, 'shortBody');

			$path = 'problems/getProblems/'. $limit . '_' . $offset . '_' . intval($shortBody);
			return $this->getMockData($path);
		} elseif ($method == 'POST') {
			$code = $this->getParam($postData, 'code');
			$name = $this->getParam($postData, 'name');
			$body = $this->getParam($postData, 'body');
			$type = $this->getParam($postData, 'typeId');
			$interactive = $this->getParam($postData, 'interactive');
			$masterjudgeId = $this->getParam($postData, 'masterjudgeId');

			$path = 'problems/createProblem/'. $code . '_' . $name . '_' . $body . '_' . $type . '_' . $interactive . '_' . $masterjudgeId;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockProblemMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$id = $this->getParam($urlParams, 'id');
			$shortBody = $this->getParam($queryParams, 'shortBody');

			$path = 'problems/getProblem/'. $id . '_' . intval($shortBody);
			return $this->getMockData($path);
		} elseif ($method == 'PUT') {			
			$id = $this->getParam($urlParams, 'id');
			$name = $this->getParam($postData, 'name', true);
			$body = $this->getParam($postData, 'body', true);
			$type = $this->getParam($postData, 'typeId', true);
			$interactive = $this->getParam($postData, 'interactive', true);
			$masterjudgeId = $this->getParam($postData, 'masterjudgeId', true);
			$activeTestcases = $this->getParam($postData, 'activeTestcases', true);
			
			$path = 'problems/updateProblem/'. $id . '_' . $name . '_' . $body . '_' . $type . '_' . $interactive . '_' . $masterjudgeId . '_' . $activeTestcases;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockProblemTestcasesMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$problemId = $this->getParam($urlParams, 'problemId');

			$path = 'problems/getProblemTestcases/'. $problemId;
			return $this->getMockData($path);
		} elseif ($method == 'POST') {
			$problemId = $this->getParam($urlParams, 'problemId');
			$input = $this->getParam($postData, 'input');
			$output = $this->getParam($postData, 'output');
			$timelimit = $this->getParam($postData, 'timeLimit');
			$judgeId = $this->getParam($postData, 'judgeId');
			$active = $this->getParam($postData, 'active');

			$path = 'problems/createProblemTestcase/'. $problemId . '_' . $input . '_' . $output . '_' . $timelimit . '_' . $judgeId . '_' . intval($active);
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockProblemTestcaseMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$problemId = $this->getParam($urlParams, 'problemId');
			$number = $this->getParam($urlParams, 'number');

			$path = 'problems/getProblemTestcase/'. $problemId . '_' . $number;
			return $this->getMockData($path);
		} elseif ($method == 'PUT') {
			$problemId = $this->getParam($urlParams, 'problemId');
			$number = $this->getParam($urlParams, 'number');
			$input = $this->getParam($postData, 'input', true);
			$output = $this->getParam($postData, 'output', true);
			$timeLimit = $this->getParam($postData, 'timeLimit', true);
			$judgeId = $this->getParam($postData, 'judgeId', true);
			$active = $this->getParam($postData, 'active', true);

			$path = 'problems/updateProblemTestcase/'. $problemId . '_' . $number . '_' . $input . '_' . $output . '_' . $timeLimit . '_' . $judgeId . '_' . intval($active);
			return $this->getMockData($path);
		} elseif ($method == 'DELETE') {
			$problemId = $this->getParam($urlParams, 'problemId');
			$number = $this->getParam($urlParams, 'number');

			$path = 'problems/deleteProblemTestcase/'. $problemId . '_' . $number;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockProblemTestcaseFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$problemId = $this->getParam($urlParams, 'problemId');
			$number = $this->getParam($urlParams, 'number');
			$filename = $this->getParam($urlParams, 'filename');

			$path = 'problems/getProblemTestcaseFile/'. $problemId . '_' . $number . '_' . $filename;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockJudgesMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$limit = $this->getParam($queryParams, 'limit');
			$offset = $this->getParam($queryParams, 'offset');

			$path = 'problems/getJudges/'. $limit . '_' . $offset;
			return $this->getMockData($path);
		} elseif ($method == 'POST') {
			$source = $this->getParam($postData, 'source');
			$compilerId = $this->getParam($postData, 'compilerId');
			$type = $this->getParam($postData, 'typeId');
			$name = $this->getParam($postData, 'name');

			$path = 'problems/createJudge/'. $source . '_' . $compilerId . '_' . $type . '_' . $name;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockJudgeMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$id = $this->getParam($urlParams, 'id');

			$path = 'problems/getJudge/'. $id;
			return $this->getMockData($path);
		} elseif($method == 'PUT') {
			$id = $this->getParam($urlParams, 'id');
			$source = $this->getParam($postData, 'source', true);
			$compilerId = $this->getParam($postData, 'compilerId', true);
			$name = $this->getParam($postData, 'name', true);

			$path = 'problems/updateJudge/'. $id . '_' . $source . '_' . $compilerId . '_' . $name;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}
	
	public function mockJudgeFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
	    if ($method == 'GET') {
	        $id = $this->getParam($urlParams, 'id');
	        $filename = $this->getParam($urlParams, 'filename');
	        
	        $path = 'problems/getJudgeFile/'. $id . '_' . $filename;
	        return $this->getMockData($path);
	    } else {
	        throw new \Exception("Method of this type is not supported by mock");
	    }
	}

	public function mockSubmissionMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$id = $this->getParam($urlParams, 'id');

			$path = 'problems/getSubmission/'. $id;
			return $this->getMockData($path);
		}  elseif ($method == 'PUT') {
		    $id = $this->getParam($urlParams, 'id');
		    
		    $path = 'problems/updateSubmission/'. $id . '_' . intval($private);
		    return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockSubmissionsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$ids = $this->getParam($queryParams, 'ids');

			$path = 'problems/getSubmissions/'. $ids;
			return $this->getMockData($path);
		} elseif ($method == 'POST') {
			$problemId = $this->getParam($postData, 'problemId');
			$compilerId = $this->getParam($postData, 'compilerId');
			$source = $this->getParam($postData, 'source');
			$private = $this->getParam($postData, 'private', true);
		    $files = $this->getParam($filesData, 'files', true);
		    if($files === null) $files = [];
            $tests = $this->getParam($postData, 'tests', true);
            if($tests === null) $tests = [];
            
			$path = 'problems/createSubmission/';
		    $path .= $problemId;
		    $path .= '_' . $compilerId; 
		    $path .= '_' . $source;
		    $path .= '_' . ($private ? 1 : 0);
		    $path .= '_' . implode(',', array_keys($files));
		    $path .= '_' . implode(',', array_keys($tests));

		    return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}
	
	public function mockSubmissionFileMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
	    if ($method == 'GET') {
	        $id = $this->getParam($urlParams, 'id');
	        $filename = $this->getParam($urlParams, 'filename');
	        
	        $path = 'problems/getSubmissionFile/'. $id . '_' . $filename;
	        return $this->getMockData($path);
	    } else {
	        throw new \Exception("Method of this type is not supported by mock");
	    }
	}

}
