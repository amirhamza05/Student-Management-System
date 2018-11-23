<?php
/**
 * [MOCK] ProblemsClientV3
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

namespace SphereEngine\Api\Mock;

class ProblemsClientV3 extends \SphereEngine\Api\ProblemsClientV3
{
	/**
	 * Constructor
	 * 
	 * @param string $accessToken Access token to Sphere Engine service
	 * @param string $endpoint link to the endpoint
	 * @param boolean $strictEndpoint strict endpoint (false if you need use another endpoint than sphere-engine.com)
	 */
    function __construct($accessToken, $endpoint, $strictEndpoint = true)
	{
	    $this->apiClient = new ProblemsApiClient($accessToken, $this->createEndpointLink('problems', $endpoint, $strictEndpoint));
	}
}
