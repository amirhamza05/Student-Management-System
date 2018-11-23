<?php

/**
 * ApiCommonsTrait
 * 
 * PHP version 5
 *
 * Common function for all Sphere Engine modules.
 *
 */

namespace SphereEngine\Api;

trait ApiCommonsTrait
{
    /**
	 * Create endpoint link
	 * 
	 * @param string $module Sphere Engine module (problems, compilers)
	 * @param string $endpoint Sphere Engine endpoint
	 * @param boolean $strictEndpoint strict endpoint (false if you need use another endpoint than sphere-engine.com)
	 * @throws \RuntimeException
	 */
	protected function createEndpointLink($module, $endpoint, $strictEndpoint = true)
	{

		if (strpos($endpoint, '.') === false) {
		    if($strictEndpoint && preg_match('/^[a-z0-9]{8,16}$/', $endpoint) == false) {
		        throw new \RuntimeException('A valid key must consist of at least 8 to 16 characters consisting of lowercase letters and numbers');
		    }
		    return $endpoint . '.' . $this->module . '.sphere-engine.com/api/' . $this->version;
		} else {
		    if($strictEndpoint && preg_match('/^[a-z0-9]{8,16}(?:\.api)?\.'.$module.'\.sphere\-engine\.com$/', $endpoint) == false) {
		        throw new \RuntimeException('Correct endpoint should be in format {customerID}.api.'.$module.'.sphere-engine.com');
		    }
		    return $endpoint . '/api/' . $this->version;
		}
	}
	
	/**
	 * extra POST data only for the next request
	 * 
	 * @param array $data
	 */
	public function addExtraPost($data) {
	    $this->apiClient->addExtraPost($data);
	}
	
}
