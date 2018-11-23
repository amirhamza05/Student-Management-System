<?php

use SphereEngine\Api\Mock\ProblemsClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class ProblemsClientV3ExceptionsOldTest extends \PHPUnit\Framework\TestCase
{
	protected static $client;
	
	public static function setUpBeforeClass()
	{
		$access_token = 'correctAccessToken';
		$endpoint = 'unittest';
		self::$client = new ProblemsClientV3(
				$access_token,
    		    $endpoint,
    		    false);
	}
	
    public function testAutorizationFail()
    {
        $access_token = 'fakeAccessToken';
        $endpoint = 'unittest';
        $invalidClient = new ProblemsClientV3(
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
            new ProblemsClientV3('', 'abcdefg', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }
    
    public function testEndpointKeyTooLong()
    {
        try {
            new ProblemsClientV3('', 'abcdefgh123456789', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }
    
    public function testInvalidEndpoint()
    {
        try {
            new ProblemsClientV3('', 'compilers.sphere-engine.lo', true);
            $this->assertTrue(false);
        } catch (\RuntimeException $e) {
            $this->assertEquals(0, $e->getCode());
        }
    }
    
    public function testGetProblemsInvalidResponse()
    {
		try {
        	self::$client->getProblems(422, 422);
        	$this->assertTrue(false);
        } catch (SphereEngineResponseException $e) {
        	$this->assertEquals(422, $e->getCode());
        }    	
    }

    public function testGetProblemMethodWrongCode()
    {	
    	try {
    		self::$client->getProblem('NON_EXISTING_PROBLEM');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testGetProblemInvalidResponse()
    {
		try {
    		self::$client->getProblem("P422");
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }
    
    public function testCreateProblemMethodCodeTaken()
    {
    	try {
    		self::$client->createProblem('TEST', 'taken_problem_code');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
    }
    
    public function testCreateProblemMethodCodeEmpty()
    {
    	try {
    		self::$client->createProblem('', 'empty_problem_code');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
    }
    
    public function testCreateProblemMethodCodeInvalid()
    {
    	try {
    		self::$client->createProblem('!@#$%^', 'invalid_problem_code');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
    }
    
    public function testCreateProblemMethodEmptyName()
    {
    	try {
    		self::$client->createProblem('UNIQUE_CODE', '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}     	
    }
    
    public function testCreateProblemMethodNonexistingMasterjudge()
    {
    	$nonexistingMasterjudgeId = 9999;
    	try {
			self::$client->createProblem(
    			'UNIQUE_CODE',
				'nonempty_name',
				'body',
				'binary',
				0,
				$nonexistingMasterjudgeId);    	
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testCreateProblemInvalidResponse()
    {
		try {
			self::$client->createProblem(
				'UNIQUE_CODE', 
				'invalid_response', 
				'body', 
				'binary',
				0,
				1000);
		} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testUpdateProblemMethodNonexistingProblem()
    {
    	try {
    		self::$client->updateProblem('NON_EXISTING_CODE', 'nonexisting_problem_code');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testUpdateProblemMethodNonexistingMasterjudge()
    {
    	$nonexistingMasterjudgeId = 9999;
    	try {
    		self::$client->updateProblem(
    				'TEST',
    				'nonempty_name',
    				'body',
    				'binary',
    				0,
    				$nonexistingMasterjudgeId);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testUpdateProblemMethodEmptyCode()
    {
    	try {
    		self::$client->updateProblem('', 'nonempty_name');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}  	
    }
    
    public function testUpdateProblemMethodEmptyName()
    {
    	try {
    		self::$client->updateProblem('TEST', '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}	
    }

    public function testUpdateProblemInvalidResponse()
    {
		try {
    		self::$client->updateProblem('CODE', 'invalid_response');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }
    
    public function testGetProblemTestcasesMethodNonexistingProblem()
    {
    	try {
    		self::$client->getProblemTestcases('NON_EXISTING_CODE');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testGetProblemTestcasesMethodInvalidResponse()
    {
		try {
    		self::$client->getProblemTestcases('INVALID_RESPONSE');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    
    public function testGetProblemTestcaseMethodNonexistingProblem()
    {
    	try {
    		self::$client->getProblemTestcase('NON_EXISTING_CODE', 0);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testGetProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	try {
    		self::$client->getProblemTestcase('TEST', $nonexistingTestcase);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testGetProblemTestcaseMethodInvalidResponse()
    {
    	try {
    		self::$client->getProblemTestcase('INVALID_RESPONSE', 0);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testCreateProblemTestcaseMethodNonexistingProblem()
    {
    	try {
    		self::$client->createProblemTestcase("NON_EXISTING_CODE", "in0", "out0", 10, 2, 1);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testCreateProblemTestcaseMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	try {
    		self::$client->createProblemTestcase("TEST", "in0", "out0", 10, $nonexistingJudge, 1);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testCreateProblemTestcaseMethodInvalidResponse()
    {
    	try {
    		self::$client->createProblemTestcase("TEST", "invalid_response");
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testUpdateProblemTestcaseMethodNonexistingProblem()
    {
    	try {
    		self::$client->updateProblemTestcase("NON_EXISTING_CODE", 0, 'updated_input');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testUpdateProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	try {
    		self::$client->updateProblemTestcase("TEST", $nonexistingTestcase, 'updated_input');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testUpdateProblemTestcaseMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	try {
    		self::$client->updateProblemTestcase("TEST", 0, 'updated_input', 'updated_output', 1, $nonexistingJudge, 0);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testUpdateProblemTestcaseMethodInvalidResponse()
    {
    	try {
    		self::$client->updateProblemTestcase("TEST", 0, "invalid_response");
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testDeleteProblemTestcaseMethodNonexistingProblem()
    {
		$nonexistingProblem = 'NON_EXISTING_CODE';
    	try {
    		self::$client->deleteProblemTestcase($nonexistingProblem, 0);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testDeleteProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	try {
    		self::$client->deleteProblemTestcase('TEST', $nonexistingTestcase);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testDeleteProblemTestcaseMethodInvalidResponse()
    {
    	try {
    		self::$client->deleteProblemTestcase("INVALID_RESONSE", 0);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testGetProblemTestcaseFileMethodNonexistingProblem()
    {
		$nonexistingProblem = 'NON_EXISTING_CODE';
    	try {
    		self::$client->getProblemTestcaseFile($nonexistingProblem, 0, 'input');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testGetProblemTestcaseFileMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	try {
    		self::$client->getProblemTestcaseFile("TEST", $nonexistingTestcase, 'input');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
    
    public function testGetProblemTestcaseFileMethodNonexistingFile()
    {
    	try {
    		self::$client->getProblemTestcaseFile("TEST", 0, 'fakefile');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }

    public function testGetJudgesInvalidResponse()
    {
		try {
    		self::$client->getJudges(422, 422);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

    public function testGetJudgeMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	try {
    		self::$client->getJudge($nonexistingJudge);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
    }
	
    public function testGetJudgeInvalidResponse()
    {
		try {
    		self::$client->getJudge(422);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

	public function testCreateJudgeMethodEmptySource()
	{
    	try {
    		self::$client->createJudge('', 1, 'testcase', '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
	}
	
	public function testCreateJudgeMethodNonexistingCompiler()
	{
		$nonexistingCompiler = 9999;
    	try {
    		self::$client->createJudge('nonempty_source', $nonexistingCompiler, 'testcase', '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}
	
    public function testCreateJudgeInvalidResponse()
    {
		try {
    		self::$client->createJudge('invalid_response', 1, 'testcase', '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }

	public function testUpdateJudgeMethodEmptySource()
	{
		$judge_id = 100;
    	try {
    		self::$client->updateJudge($judge_id, '', 1, '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
	}
	
	public function testUpdateJudgeMethodNonexistingJudge()
	{
		$nonexistingJudge = 99999999;
    	try {
    		self::$client->updateJudge($nonexistingJudge, 'nonempty_source', 1, '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}
	
	public function testUpdateJudgeMethodNonexistingCompiler()
	{
		$judge_id = 100;
		$nonexistingCompiler = 9999;
    	try {
    		self::$client->updateJudge($judge_id, 'nonempty_source', $nonexistingCompiler, '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}
	
	public function testUpdateJudgeMethodForeignJudge()
	{
    	try {
    		self::$client->updateJudge(1, 'nonempty_source', 1, '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(403, $e->getCode());
    	}
	}

    public function testUpdateJudgeInvalidResponse()
    {
		try {
    		self::$client->updateJudge(1, 'invalid_response', 1, '');
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }
	
	public function testGetSubmissionMethodNonexistingSubmission()
	{
		$nonexistingSubmission = 9999999999;
    	try {
    		self::$client->getSubmission($nonexistingSubmission);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}

    public function testGetSubmissionMethodInvalidResponse()
    {	
		try {
    		self::$client->getSubmission(422);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
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
			self::$client->getSubmissions([422]);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }
	
	public function testCreateSubmissionMethodEmptySource()
	{
    	try {
    		self::$client->createSubmission('TEST', '', 1);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(400, $e->getCode());
    	}
	}
	
	public function testCreateSubmissionMethodNonexistingProblem()
	{
    	try {
    		self::$client->createSubmission('NON_EXISTING_CODE', 'nonempty_source', 1);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}
	
	public function testCreateSubmissionMethodNonexistingCompiler()
	{
		$nonexistingCompiler = 9999;
    	try {
    		self::$client->createSubmission('TEST', 'nonempty_source', $nonexistingCompiler);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}
	
	public function testCreateSubmissionMethodNonexistingUser()
	{
		$nonexistingUser = 999999;
    	try {
    		self::$client->createSubmission('TEST', 'nonempty_source', 1, $nonexistingUser);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(404, $e->getCode());
    	}
	}

    public function testCreateSubmissionMethodInvalidResponse()
    {
		try {
    		self::$client->createSubmission('TEST', 'invalid_response', 1);
    		$this->assertTrue(false);
    	} catch (SphereEngineResponseException $e) {
    		$this->assertEquals(422, $e->getCode());
    	}
    }
}
