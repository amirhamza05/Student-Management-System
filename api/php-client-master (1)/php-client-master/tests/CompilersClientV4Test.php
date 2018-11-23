<?php

use SphereEngine\Api\Mock\CompilersClientV4;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class CompilersClientV4Test extends \PHPUnit\Framework\TestCase
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

	public function testValidEndpoint()
	{
	    try {
	        new CompilersClientV4('', 'abcd1234', true);
	        new CompilersClientV4('', 'abcd12344321dcba', true);
	        new CompilersClientV4('', 'abcd1234.api.compilers.sphere-engine.com', true);
	        new CompilersClientV4('', 'abcd1234.compilers.sphere-engine.com', true);
	        $this->assertTrue(true);
	    } catch (\RuntimeException $e) {
	        $this->assertTrue(false);
	    }
	}
	
    public function testTestMethodSuccess()
    {        
        $this->assertEquals(true, array_key_exists('message', self::$client->test()));
    }

    public function testCompilersMethodSuccess()
    {
        $this->assertEquals('C++', self::$client->getCompilers()['items'][0]['name']);
    }

    public function testGetSubmissionMethodSuccess()
    {
        $s = self::$client->getSubmission(2);
        $this->assertEquals(11, $s['compiler']['id'], 'Submission compiler');
    }
    
    public function testGetSubmissionsMethodSuccess()
    {
    	$response = self::$client->getSubmissions([4,9]);
    
    	$this->assertTrue(isset($response['items']));
    	$this->assertEquals(2, count($response['items']));
    	$this->assertEquals(4, $response['items'][0]['id']);
    	$this->assertEquals(9, $response['items'][1]['id']);
    }
    
    public function testGetSubmissionsMethodNonexistingSubmission()
    {
    	$response = self::$client->getSubmissions([9999,10000]);
    	$this->assertTrue(isset($response['items']));
    	$this->assertEquals(0, count($response['items']));
    }
    
    public function testGetSubmissionsMethodValidParams()
    {
    	try {
    		$response = self::$client->getSubmissions(1);
    		$response = self::$client->getSubmissions([1]);
    		$this->assertTrue(true);
    	} catch(\InvalidArgumentException $e) {
    		$this->assertTrue(false);
    	}
    }

    public function testGetSubmissionStreamMethodSuccess()
    {
        $this->assertEquals("source2", self::$client->getSubmissionStream(2, 'source'), 'Submission source');
        $this->assertEquals("stdin2", self::$client->getSubmissionStream(2, 'input'), 'Submission input');
        $this->assertEquals("stdout2", self::$client->getSubmissionStream(2, 'output'), 'Submission output');
        $this->assertEquals("stderr2", self::$client->getSubmissionStream(2, 'error'), 'Submission error');
        $this->assertEquals("cmperr2", self::$client->getSubmissionStream(2, 'cmpinfo'), 'Submission cmpinfo');
    }

    public function testCreateSubmissionMethodSuccess()
    {
    	$submission_source = "unittest";
		$submission_compiler = 11;
		$submission_input = "unittestinput";
		$response = self::$client->createSubmission($submission_source, $submission_compiler, $submission_input);
		$submission_id = $response['id']; 
        
		$this->assertTrue($submission_id > 0, 'New submission id should be greater than 0');
    }
}
