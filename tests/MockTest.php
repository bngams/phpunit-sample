<?php

use App\Divide;
use App\DivideService;
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{

	public function testDivideWithMockery()
	{
		/** @var \Mockery\MockInterface $mock */
		$mock = \Mockery::mock(Divide::class);
		$mock->shouldReceive('divide')->andReturn(5);
		$service = new DivideService($mock);
		$result = $service->dividingService(10);
		$this->assertEquals(5, $result);
	}


	/** phpunit getMock => PHPUnit 8 **/
// 	public function testDivide()
// 	{
// 		$mock = $this->getMock('App\Divide');
// 		$mock->shouldReceive('divide')->andReturn(5);
// 		$service = new DivideService($mock);
// 		$result = $service->dividingService(10);
// 		$this->assertEquals(5, $result);
// 	}
	
}