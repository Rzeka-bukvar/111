<?php
use PHPUnit\Framework\TestCase;
use specialepic\QuadraticEq;
use specialepic\RzekaMansur_Exception;

class QuadraticTest extends TestCase 
{
	
	public function testSolve()
	{
	      $my = new QuadraticEq();
	      $this->assertSame(array(6.0,2.0), $my->solve(1, -8, 12));
	      $this->assertSame(array(3), $my->solve(1, -6, 9));
	      $this->assertSame(array(-6), $my->solve(1, 12, 36));
	}
	
	public function testFailingSolve()
        {
        	$this->expectException(RzekaMansur_Exception::class);
		$my = new QuadraticEq();
	        $my->solve(5, 1, 1);
        }
}
