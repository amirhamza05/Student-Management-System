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

class CompilersApiClientV4 extends ApiClient
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
	protected function makeHttpCall($resourcePath, $method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType=null)
	{
		if ( ! $this->isAccessTokenCorrect() ) {
			return $this->getMockData('unauthorizedAccess');
		}

		$queryParams['access_token'] = $this->accessToken;

		if ($resourcePath == '/test') {
		    return $this->mockTestMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/compilers') {
		    return $this->mockCompilersMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/submissions') {
			return $this->mockSubmissionsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/submissions/{id}') {
		    return $this->mockSubmissionMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} elseif ($resourcePath == '/submissions/{id}/{stream}') {
		    return $this->mockSubmissionStreamMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType);
		} else {
	    	throw new \Exception('Resource url beyond mock functionality');
		}
	}

	public function mockTestMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			return $this->getMockData('compilers/test');
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockCompilersMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			return $this->getMockData('compilers/compilers');
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockSubmissionsMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$ids = $this->getParam($queryParams, 'ids');
			
			$path = 'compilers/getSubmissions/'. $ids;
			return $this->getMockData($path);
		} else if ($method == 'POST') {
			$sourceCode = $this->getParam($postData, 'source');
			$compiler = $this->getParam($postData, 'compilerId');
			$input = $this->getParam($postData, 'input');
			$priority = $this->getParam($postData, 'priority', true);
			$files = $this->getParam($filesData, 'files', true);
			if($files === null) $files = [];
			$timeLimit = $this->getParam($postData, 'timeLimit', true);
			$memoryLimit = $this->getParam($postData, 'memoryLimit', true);
			
			$path = 'compilers/createSubmission/'. $sourceCode . '_' . $compiler . '_' . $input;
			$path .= '_' . intval($priority);
			$path .= '_' . implode(',', array_keys($files));
			$path .= '_' . intval($timeLimit);
			$path .= '_' . intval($memoryLimit);
			
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockSubmissionMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$submissionId = $this->getParam($urlParams, 'id');

			$path = 'compilers/getSubmission/'. $submissionId;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}

	public function mockSubmissionStreamMethod($method, $urlParams, $queryParams, $postData, $filesData, $headerParams, $responseType)
	{
		if ($method == 'GET') {
			$submissionId = $this->getParam($urlParams, 'id');
			$stream = $this->getParam($urlParams, 'stream');

			$path = 'compilers/getSubmissionStream/'. $submissionId . '_' . $stream;
			return $this->getMockData($path);
		} else {
			throw new \Exception("Method of this type is not supported by mock");
		}
	}
}
