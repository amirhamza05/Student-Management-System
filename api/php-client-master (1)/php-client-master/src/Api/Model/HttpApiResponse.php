<?php
/**
 * HttpApiResponse
 * 
 * PHP version 5
 *
 * @category Class
 * @package  SphereEngine\Api\Model
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

namespace SphereEngine\Api\Model;

class HttpApiResponse
{
    public $httpCode;
    public $httpBody;
    public $contentType;
    
    public $error;

    function __construct($httpCode, $contentType, $httpBody, $error)
    {
        $this->httpCode = $httpCode;
        $this->contentType = $contentType;
        $this->httpBody = $httpBody;
        $this->error = $error;
    }
}