<?php
use PHPUnit\Framework\TestCase;
use specialepic\LinearEq;
use specialepic\RzekaMansur_Exception;

class LinearTest extends TestCase 
{

	public function testLinearEq()
	{
	      $my = new LinearEq();
	      $this->assertEquals(-3, $my->solvel(2, 6, 8));
	      $this->assertEquals(-2, $my->solvel(4, 8, 6));
	      $this->assertEquals(-2, $my->solvel(8, 16, 4));
	}

	public function testFailingLinear()
        {
        	$this->expectException(RzekaMansur_Exception::class);
		$my = new LinearEq();
	        $my->solvel(0, 16, 6);
        }
	
}