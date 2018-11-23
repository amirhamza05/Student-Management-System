<?php

use SphereEngine\Api\Mock\ProblemsClientV3;
use SphereEngine\Api\SphereEngineResponseException;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class ProblemsClientV3ExceptionsNewTest extends \PHPUnit\Framework\TestCase
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
	
	/**
	 * @requires PHPUnit 5
	 */
    public function testAutorizationFail()
    {
        $access_token = 'fakeAccessToken';
        $endpoint = 'unittest';
        $client = new ProblemsClientV3(
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
        
        new ProblemsClientV3('', 'abcdefg', true);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testEndpointKeyTooLong()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(0);
        
        new ProblemsClientV3('', 'abcdefgh123456789', true);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testInvalidEndpoint()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionCode(0);
        
        new ProblemsClientV3('', 'compilers.sphere-engine.lo', true);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testGetProblemsInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->getProblems(422, 422);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemMethodWrongCode()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblem('NON_EXISTING_PROBLEM');
    }

	/**
     * @requires PHPUnit 5
     */
    public function testGetProblemInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->getProblem("P422");
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemMethodCodeTaken()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->createProblem('TEST', 'taken_problem_code');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemMethodCodeEmpty()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->createProblem('', 'empty_problem_code');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemMethodCodeInvalid()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->createProblem('!@#$%^', 'invalid_problem_code');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemMethodEmptyName()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->createProblem('UNIQUE_CODE', '');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemMethodNonexistingMasterjudge()
    {
    	$nonexistingMasterjudgeId = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->createProblem(
    			'UNIQUE_CODE', 
    			'nonempty_name', 
    			'body', 
    			'binary',
    			0,
    			$nonexistingMasterjudgeId);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testCreateProblemInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->createProblem(
    			'UNIQUE_CODE', 
    			'invalid_response', 
    			'body', 
    			'binary',
    			0,
    			1000);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemMethodNonexistingProblem()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->updateProblem('NON_EXISTING_CODE', 'nonexisting_problem_code');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemMethodNonexistingMasterjudge()
    {
    	$nonexistingMasterjudgeId = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->updateProblem(
    			'TEST', 
    			'nonempty_name',
    			'body',
    			'binary',
    			0,
    			$nonexistingMasterjudgeId
    			);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemMethodEmptyCode()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->updateProblem('', 'nonempty_name');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemMethodEmptyName()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(400);
    	self::$client->updateProblem('TEST', '');
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->updateProblem('CODE', 'invalid_response');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcasesMethodNonexistingProblem()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcases('NON_EXISTING_CODE');
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcasesMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->getProblemTestcases('INVALID_RESPONSE');
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseMethodNonexistingProblem()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcase('NON_EXISTING_CODE', 0);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcase('TEST', $nonexistingTestcase);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->getProblemTestcase('INVALID_RESPONSE', 0);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemTestcaseMethodNonexistingProblem()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->createProblemTestcase("NON_EXISTING_CODE", "in0", "out0", 10, 2, 1);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testCreateProblemTestcaseMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->createProblemTestcase("TEST", "in0", "out0", 10, $nonexistingJudge, 1);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testCreateProblemTestcaseMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->createProblemTestcase("TEST", "invalid_response");
    }

    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemTestcaseMethodNonexistingProblem()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->updateProblemTestcase("NON_EXISTING_CODE", 0, 'updated_input');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->updateProblemTestcase("TEST", $nonexistingTestcase, 'updated_input');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemTestcaseMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->updateProblemTestcase("TEST", 0, 'updated_input', 'updated_output', 1, $nonexistingJudge, 0);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testUpdateProblemTestcaseMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->updateProblemTestcase("TEST", 0, "invalid_response");
    }

    /**
     * @requires PHPUnit 5
     */
    public function testDeleteProblemTestcaseMethodNonexistingProblem()
    {
		$nonexistingProblem = 'NON_EXISTING_CODE';
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->deleteProblemTestcase($nonexistingProblem, 0);
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testDeleteProblemTestcaseMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->deleteProblemTestcase('TEST', $nonexistingTestcase);
    }
    
	/**
     * @requires PHPUnit 5
     */
    public function testDeleteProblemTestcaseMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->deleteProblemTestcase("INVALID_RESONSE", 0);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseFileMethodNonexistingProblem()
    {
		$nonexistingProblem = 'NON_EXISTING_CODE';
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcaseFile($nonexistingProblem, 0, 'input');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseFileMethodNonexistingTestcase()
    {
		$nonexistingTestcase = 9999;
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcaseFile("TEST", $nonexistingTestcase, 'input');
    }
    
    /**
     * @requires PHPUnit 5
     */
    public function testGetProblemTestcaseFileMethodNonexistingFile()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getProblemTestcaseFile("TEST", 0, 'fakefile');
    }

	/**
     * @requires PHPUnit 5
     */
    public function testGetJudgesInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->getJudges(422, 422);
    }

    /**
     * @requires PHPUnit 5
     */
    public function testGetJudgeMethodNonexistingJudge()
    {
    	$nonexistingJudge = 9999;
    	
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(404);
    	self::$client->getJudge($nonexistingJudge);
    }
	
	/**
     * @requires PHPUnit 5
     */
    public function testGetJudgeInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->getJudge(422);
    }

	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateJudgeMethodEmptySource()
	{
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(400);
		self::$client->createJudge('', 1, 'testcase', '');
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateJudgeMethodNonexistingCompiler()
	{
		$nonexistingCompiler = 9999;
		
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->createJudge('nonempty_source', $nonexistingCompiler, 'testcase', '');
	}
	
	/**
     * @requires PHPUnit 5
     */
    public function testCreateJudgeInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->createJudge('invalid_response', 1, 'testcase', '');
    }

	/**
	 * @requires PHPUnit 5
	 */
	public function testUpdateJudgeMethodEmptySource()
	{		
		$judge_id = 100;
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(400);
		self::$client->updateJudge($judge_id, '', 1, '');
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testUpdateJudgeMethodNonexistingJudge()
	{
		$nonexistingJudge = 99999999;
		
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->updateJudge($nonexistingJudge, 'nonempty_source', 1, '');
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testUpdateJudgeMethodNonexistingCompiler()
	{
		$judge_id = 100;
		$nonexistingCompiler = 9999;
	
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->updateJudge($judge_id, 'nonempty_source', $nonexistingCompiler, '');
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testUpdateJudgeMethodForeignJudge()
	{
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(403);
		self::$client->updateJudge(1, 'nonempty_source', 1, '');
	}
	
	/**
     * @requires PHPUnit 5
     */
    public function testUpdateJudgeInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->updateJudge(1, 'invalid_response', 1, '');
    }

	/**
	 * @requires PHPUnit 5
	 */
	public function testGetSubmissionMethodNonexistingSubmission()
	{
		$nonexistingSubmission = 9999999999;
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->getSubmission($nonexistingSubmission);
	}

	/**
     * @requires PHPUnit 5
     */
    public function testGetSubmissionMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
    	self::$client->getSubmission(422);
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
		self::$client->getSubmissions([422]);
    }

	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateSubmissionMethodEmptySource()
	{
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(400);
		self::$client->createSubmission('TEST', '', 1);
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateSubmissionMethodNonexistingProblem()
	{
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->createSubmission('NON_EXISTING_CODE', 'nonempty_source', 1);
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateSubmissionMethodNonexistingCompiler()
	{
		$nonexistingCompiler = 9999;
		
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->createSubmission('TEST', 'nonempty_source', $nonexistingCompiler);
	}
	
	/**
	 * @requires PHPUnit 5
	 */
	public function testCreateSubmissionMethodNonexistingUser()
	{
		$nonexistingUser = 999999;
	
		$this->expectException(SphereEngineResponseException::class);
		$this->expectExceptionCode(404);
		self::$client->createSubmission('TEST', 'nonempty_source', 1, $nonexistingUser);
	}

	/**
     * @requires PHPUnit 5
     */
    public function testCreateSubmissionMethodInvalidResponse()
    {
    	$this->expectException(SphereEngineResponseException::class);
    	$this->expectExceptionCode(422);
		self::$client->createSubmission('TEST', 'invalid_response', 1);
    }
}
