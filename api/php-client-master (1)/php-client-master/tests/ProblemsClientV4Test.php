<?php

use SphereEngine\Api\Mock\ProblemsClientV4;
use SphereEngine\Api\SphereEngineResponseException;

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class ProblemsClientV4Test extends \PHPUnit\Framework\TestCase
{
	protected static $client;
	
	public static function setUpBeforeClass()
	{
		$access_token = 'correctAccessToken';
		$endpoint = 'unittest';
		self::$client = new ProblemsClientV4(
				$access_token,
    		    $endpoint,
    		    false);
	}

	public function testValidEndpoint()
	{
	    try {
	        new ProblemsClientV4('', 'abcd1234', true);
	        new ProblemsClientV4('', 'abcd12344321dcba', true);
	        new ProblemsClientV4('', 'abcd1234.api.problems.sphere-engine.com', true);
	        new ProblemsClientV4('', 'abcd1234.problems.sphere-engine.com', true);
	        $this->assertTrue(true);
	    } catch (\RuntimeException $e) {
	        $this->assertTrue(false);
	    }
	}
	
    public function testAutorizationSuccess()
    {
    	self::$client->test();
    	$this->assertTrue(true);
    }

    public function testTestMethodSuccess()
    {
        $this->assertTrue(count(self::$client->test()) > 0);
    }
    
    public function testCompilersMethodSuccess()
    {
    	$this->assertEquals("C++", self::$client->getCompilers()['items'][0]['name']);
    }
    
    public function testGetProblemsMethodSuccess()
    {
		$problems = self::$client->getProblems();
    	$this->assertEquals(10, $problems['paging']['limit']);
		$this->assertEquals(0, $problems['paging']['offset']);
		$this->assertEquals(false, isset($problems['items'][0]['shortBody']));
		$this->assertEquals(true, isset($problems['items'][0]['lastModified']));
		$this->assertEquals(true, isset($problems['items'][0]['lastModified']['body']));
		$this->assertEquals(true, isset($problems['items'][0]['lastModified']['settings']));
    	$this->assertEquals(11, self::$client->getProblems(11)['paging']['limit']);
		$this->assertEquals(false, isset(self::$client->getProblems(10, 0, false)['items'][0]['shortBody']));
		$this->assertEquals(true, isset(self::$client->getProblems(10, 0, true)['items'][0]['shortBody']));
		$this->assertEquals("short", self::$client->getProblems(10, 0, true)['items'][0]['shortBody']);
    }
    
    public function testGetProblemMethodSuccess()
    {
		$problem = self::$client->getProblem('TEST');
    	$this->assertEquals('TEST', $problem['code']);
		$this->assertEquals(false, isset($problem['shortBody']));
		$this->assertEquals(true, isset($problem['lastModified']));
		$this->assertEquals(true, isset($problem['lastModified']['body']));
		$this->assertEquals(true, isset($problem['lastModified']['settings']));
		$this->assertEquals(false, isset(self::$client->getProblem('TEST', false)['shortBody']));
		$this->assertEquals(true, isset(self::$client->getProblem('TEST', true)['shortBody']));
		$this->assertEquals('short', self::$client->getProblem('TEST', true)['shortBody']);
    }
    
    public function testCreateProblemMethodSuccess()
    {
    	$problem_code = 'CODE';
    	$problem_name = 'Name';
    	$problem_body = 'Body';
    	$problem_type = 2;
    	$problem_interactive = 1;
    	$problem_masterjudgeId = 1002;
    	$this->assertEquals(
    			$problem_code, 
    			self::$client->createProblem(
						$problem_name,	
						$problem_masterjudgeId,
    					$problem_body,
    					$problem_type,
    					$problem_interactive,
						$problem_code
    				)['code'],
    			'Creation method should return new problem code');
    }
    
    public function testUpdateProblemMethodSuccess()
    {
    	$problem_id = 'CODE';	
    	$new_problem_name = 'updated_name';
    	$new_problem_body = 'update';
    	$new_problem_type = 2;
    	$new_problem_interactive = 1;
    	$new_problem_masterjudgeId = 1002;
    	self::$client->updateProblem(
    			$problem_id,
				$new_problem_name,
				$new_problem_masterjudgeId,
    			$new_problem_body,
    			$new_problem_type,
    			$new_problem_interactive);
		// there should be no exceptions during these operations
		$this->assertTrue(true);
    }
    
    public function testUpdateProblemActiveTestcasesMethodSuccess()
    {
    	self::$client->updateProblemActiveTestcases('TEST', [0,1,2]);
		$this->assertTrue(true);
    }
    
    public function testGetProblemTestcasesMethodSuccess()
    {
    	$this->assertEquals(0, self::$client->getProblemTestcases('TEST')['testcases'][0]['number']);
    }
    
    public function testGetProblemTestcaseMethodSuccess()
    {
    	$this->assertEquals(0, self::$client->getProblemTestcase('TEST', 0)['number']);
    }
    
    public function testCreateProblemTestcaseMethodSuccess()
    {
    	$response = self::$client->createProblemTestcase("TEST", "in0", "out0", 10, 2, 0);
    	$this->assertEquals(0, $response['number'], 'Testcase number');
    }

    public function testUpdateProblemTestcaseMethodSuccess()
    {
    	$new_testcase_input = "in0updated";
    	$new_testcase_output = "out0updated";
    	$new_testcase_timelimit = 10;
    	$new_testcase_judge = 2;
    	$new_testcase_active = 0;
    	
    	self::$client->updateProblemTestcase(
    			'TEST',
    			0,
    			$new_testcase_input, 
    			$new_testcase_output, 
    			$new_testcase_timelimit, 
    			$new_testcase_judge, 
    			$new_testcase_active);
		$this->assertTrue(true);
    }
    
    public function testDeleteProblemTestcaseMethodSuccess()
    {
    	self::$client->deleteProblemTestcase('TEST', 0);
		$this->assertTrue(true);
    }

    public function testGetProblemTestcaseFileMethodSuccess()
    {
		$problem_code = 'TEST';
    	$this->assertEquals("in0", self::$client->getProblemTestcaseFile($problem_code, 0, 'input'));
    	$this->assertEquals("out0", self::$client->getProblemTestcaseFile($problem_code, 0, 'output'));
    }
    
    public function testGetJudgesMethodSuccess()
    {
    	$this->assertEquals(10, self::$client->getJudges()['paging']['limit']);
    	$this->assertEquals(11, self::$client->getJudges(11)['paging']['limit']);
    }
    
    public function testGetJudgeMethodSuccess()
    {
    	$this->assertEquals(1, self::$client->getJudge(1)['id']);
    }
    
    public function testGetJudgeFileMethodSuccess()
    {
        $judgeId = 1;
        $this->assertEquals("source0", self::$client->getJudgeFile($judgeId, 'source'));
    }
    
	public function testCreateJudgeMethodSuccess()
	{
		$judge_source = 'source';
		$judge_compiler = 2;
		$judge_type = 'testcase';
		$judge_name = 'UT_judge';
		$judge_shared = false;
		
		$response = self::$client->createJudge(
						$judge_source,
						$judge_compiler,
						$judge_type,
						$judge_name,
		                $judge_shared
						);
		$judge_id = $response['id'];
		$this->assertTrue($judge_id > 0, 'Creation method should return new judge ID');
	}
	
	public function testUpdateJudgeMethodSuccess()
	{
		$judge_id = 100;
		 
		$new_judge_source = 'updated_source';
		$new_judge_compiler = 11;
		$new_judge_name = 'UT_judge_updated';
		$new_judge_shared = true;
		
		self::$client->updateJudge(
				$judge_id,
				$new_judge_source,
				$new_judge_compiler,
				$new_judge_name,
	            $new_judge_shared);
		$this->assertTrue(true);
	}
	
	public function testGetSubmissionMethodSuccess()
	{
		$submission_id = 10;
		$this->assertEquals($submission_id, self::$client->getSubmission($submission_id)['id']);
	}
	
	public function testGetSubmissionFileMethodSuccess()
	{
	    $submissionId = 1;
	    $this->assertEquals("source0", self::$client->getSubmissionFile($submissionId, 'source'));
	    $this->assertEquals("stdout0", self::$client->getSubmissionFile($submissionId, 'output'));
	    $this->assertEquals("stderr0", self::$client->getSubmissionFile($submissionId, 'error'));
	    $this->assertEquals("cmperr0", self::$client->getSubmissionFile($submissionId, 'cmpinfo'));
	    $this->assertEquals("psinfo0", self::$client->getSubmissionFile($submissionId, 'debug'));
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
	
	public function testCreateSubmissionMethodSuccess()
	{
		$submission_problem_code = 'TEST';
		$submission_source = 'source';
		$submission_compiler = 2;
		
		$response = self::$client->createSubmission(
				$submission_problem_code,
				$submission_source,
				$submission_compiler);
		$submission_id = $response['id'];
		$this->assertTrue($submission_id > 0, 'Creation method should return new submission ID');
	}
	
	public function testCreateSubmissionMultiFilesMethodSuccess()
	{
	    $submission_problem_code = 'TEST';
	    $submission_files = ['file1' => 'a', 'file2' => 'b'];
	    $submission_compiler = 2;
	    
	    $response = self::$client->createSubmissionMultiFiles(
	        $submission_problem_code,
	        $submission_files,
	        $submission_compiler);
	    $submission_id = $response['id'];
	    $this->assertTrue($submission_id > 0, 'Creation method should return new submission ID');
	}
	
	public function testCreateSubmissionWithTarSourceMethodSuccess()
	{
	    $submission_problem_code = 'TEST';
	    $submission_source = 'tar_source';
	    $submission_compiler = 2;
	    
	    $response = self::$client->createSubmissionWithTarSource(
	        $submission_problem_code,
	        $submission_source,
	        $submission_compiler);
	    $submission_id = $response['id'];
	    $this->assertTrue($submission_id > 0, 'Creation method should return new submission ID');
	}
}
