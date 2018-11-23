<?php

use SphereEngine\Api\Mock\CompilersClientV4;
use SphereEngine\Api\SphereEngineResponseException;
use SebastianBergmann\Environment\Runtime;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class CompilersClientV4ExceptionsOldTest extends \PHPUnit\Framework\TestCase
{
	protected static $client;
	
	public static function setUpBeforeClass()
	{
		$access_token = 'correctAccessToken';
		$endpoint = 'unittest';
		self::$client = new CompilersClientV4(
				$access_token,
    		    $endpoint,
    		    false);
	}
	
    public function testAutorizationFail()
    {
        $access_token = 'fakeAccessToken';
        $endpoint = 'unittest';
        $invalidClient = new CompilersClientV4(
        		$access_token, 
                $endpoint,
                false);

        try {
        	$invalidClient->test();
        	$this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
        	$this->assertEquals(401, $e->getCode());
        }
    }
    
    public function testEndpointKeyTooShort()
    {
        try {
            new CompilersClientV4('', 'abcdefg', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }
    
    public function testEndpointKeyTooLong()
    {
        try {
            new CompilersClientV4('', 'abcdefgh123456789', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }
    
    public function testInvalidEndpoint()
    {
        try {
            new CompilersClientV4('', 'compilers.sphere-engine.lo', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }

    public function testGetSubmissionMethodNotExisting()
    {
    	$nonexistingSubmission = 3;
    	
    	try {
    		self::$client->getSubmission($nonexistingSubmission);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testGetSubmissionMethodAccessDenied()
    {
        $foreignSubmission = 1;

        try {
            self::$client->getSubmission($foreignSubmission);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(403, $e->getCode());
        }
    }

    public function testGetSubmissionMethodInvalidResponse()
    {
        $invalidSubmission = 4;
		try {
            self::$client->getSubmission($invalidSubmission);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }
    
    public function testGetSubmissionsMethodInvalidParams()
    {
    	try {
    		$response = self::$client->getSubmissions('1');
    		$this->assertTrue(false);
    	} catch (InvalidArgumentException $e) {
    		$this->assertTrue(true);
    	}
    }

    public function testGetSubmissionsMethodInvalidResponse()
    {
		try {
            self::$client->getSubmissions([911]);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }

    public function testGetSubmissionStreamMethodAccessDenied()
    {
    	$deniedSubmission = 1;
    	
		try {
    		self::$client->getSubmissionStream($deniedSubmission, 'output');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(403, $e->getCode());
    	}
    }

	public function testGetSubmissionStreamMethodNotExistingSubmission()
    {
    	$nonexistingSubmission = 3;
    	
    	try {
    		self::$client->getSubmissionStream($nonexistingSubmission, 'output');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

	public function testGetSubmissionStreamMethodNotExistingStream()
    {	
    	try {
    		self::$client->getSubmissionStream(2, 'notexistingstream');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testCreateSubmissionMethodWrongCompiler()
    {
    	$wrongCompilerId = 9999;
    	
    	try {
    		self::$client->createSubmission('unit_test', $wrongCompilerId);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
			$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testCreateSubmissionMethodInvalidResponse()
    {
		try {
    		self::$client->createSubmission('unit_test', 11, 'invalid');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
    }
    
    public function testCreateSubmissionMultiFilesMethodNonexistingCompiler()
    {
        $nonexistingCompiler = 9999;
        try {
            self::$client->createSubmissionMultiFiles(['nonempty_source' => ''], $nonexistingCompiler);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(404, $e->getCode());
        }
    }
    
    public function testCreateSubmissionMultiFilesMethodInvalidResponse()
    {
        try {
            self::$client->createSubmissionMultiFiles(['invalid_response' => ''], 1);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }
    
    public function testCreateSubmissionWithTarSourceMethodNonexistingCompiler()
    {
        $nonexistingCompiler = 9999;
        try {
            self::$client->createSubmissionWithTarSource('unit_test', $nonexistingCompiler);
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(404, $e->getCode());
        }
    }
    
    public function testCreateSubmissionWithTarSourceMethodInvalidResponse()
    {
        try {
            self::$client->createSubmissionWithTarSource('unit_test', 11, 'invalid');
            $this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }
}
