<?php
namespace RzekaMansur;

class Linear {
	private $x;
	public function machlinear($a,$b){
		if ($a == 0) {
			throw new RzekaMansurException('Equation does not exist');
		}else{
			MyLog::log( "Opredeleno, chto eto linejnoe uravnenie: ".$a."x + ".$b." = 0 \n");
			return $this->x=-$b/$a;
		}
	}
}
?>