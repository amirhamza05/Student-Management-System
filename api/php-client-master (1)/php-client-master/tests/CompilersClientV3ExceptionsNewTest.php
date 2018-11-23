<?php

use SphereEngine\Api\Mock\CompilersClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class CompilersClientV3ExceptionsNewTest extends \PHPUnit\Framework\TestCase
{
	protected static $client;
	
	public static function setUpBeforeClass()
	{
		$access_token = 'correctAccessToken';
		$endpoint = 'unittest';
		self::$client = new CompilersClientV3(
				$access_token,
    		    $endpoint,
    		    false);
	}
	
	/**
	 * @requires PHPUnit 5
	 */
    public function testAutorizationFail()
    {
        $access_token = "fakeAccessToken";
        $endpoint = 'unittest';
        $client = new CompilersClientV3(
        		$access_token, 
                $endpoint,
                false);

        $this->expectException(SphereEngineResponseException::class);
        $this->expectExceptionCode(401);
        $client->test();
    }

    /**
     * @requires PHPUnit 5
     */
    public function testEndpointKeyTooShort()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(0);
        
        new CompilersClientV3('', 'abcdefg', true);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testEndpointKeyTooLong()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(0);
        
        new CompilersClientV3('', 'abcdefgh123456789', true);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testInvalidEndpoint()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(0);
        
        new CompilersClientV3('', 'compilers.sphere-engine.lo', true);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionMethodNotExisting()
    {
    	$nonexistingSubmission = 3;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getSubmission($nonexistingSubmission);
        //$this->assertEquals('ACCESS_DENIED', self::$client->getSubmission(9999999999)['error']);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionMethodAccessDenied()
    {
        $foreignSubmission = 1;
        
        $this->expectException(SphereEngineResponseException::class);
        $this->expectExceptionCode(403);
        self::$client->getSubmission($foreignSubmission);
        //$this->assertEquals('ACCESS_DENIED', self::$client->getSubmission(9999999999)['error']);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionMethodInvalidResponse()
    {
        $invalidSubmission = 4;
        
        $this->expectException(SphereEngineResponseException::class);
        $this->expectExceptionCode(422);
        self::$client->getSubmission($invalidSubmission);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionsMethodInvalidParams()
    {
    	$this->expectException(InvalidArgumentException::class);
    	$response = self::$client->getSubmissions('1');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionsMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
        $this->expectExceptionCode(422);
    	$response = self::$client->getSubmissions([911]);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionStreamMethodAccessDenied()
    {
    	$deniedSubmission = 1;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(403);
    	self::$client->getSubmissionStream($deniedSubmission, 'output');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionStreamMethodNotExistingSubmission()
    {
    	$nonexistingSubmission = 3;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getSubmissionStream($nonexistingSubmission, 'output');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionStreamMethodNotExistingStream()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getSubmissionStream(2, 'notexistingstream');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testCreateSubmissionMethodWrongCompiler()
    {
    	$wrong_compiler_id = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->createSubmission('unit_test', $wrong_compiler_id);
    	//$this->assertEquals("WRONG_LANG_ID", self::$client->createSubmission("unit_test", $wrong_compiler_id)['error']);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testCreateSubmissionMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->createSubmission('unit_test', 11, 'invalid');
    }
}
