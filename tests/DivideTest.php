<?php

use App\Divide;
use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
	public function testDivide()
	{
		$simple = new Divide(10);
		$result = $simple->divide(2);
		$this->assertEquals(5, $result);
	}

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivideWithException()
    {
        $simple = new Divide(10);
        $simple->divide(0);
    }


    /**
     * @param number $a value to divide
     * @param number $b divider
     * @param number $r result
     *
     * @dataProvider providerTestDivideWithProviders
     */
    public function testDivideWithProviders($a, $b, $r)
    {
        $simple = new Divide($a);
        $result = $simple->divide($b);
        $this->assertEquals($r, $result);
    }

    public function providerTestDivideWithProviders()
    {
        return array(
            array(10, 2, 5),
            array(6, 3, 2),
        );
    }
}