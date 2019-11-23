<?php
namespace RzekaMansur;
class Square extends Linear implements \core\EquationInterface {
	private $discr;

	protected function discriminant($a,$b,$c){
		return (($b*$b) - (4 * $a * $c));
	}

	public function solve($a,$b,$c){
		if($a == 0){
			return array($this->machlinear($b,$c));
		}			
		MyLog::Log("Opredeleno, chto eto kvadratnoe uravnenie: ".$a."x^2 + ".$b."x + ".$c." = 0 \n");
		$discr = $this->discriminant($a,$b,$c);
		if ($discr < 0){
			$this->x = false;
			throw new RzekaMansurException('Discriminant < 0');
		}
		else if ($discr > 0){
			$t1=((-$b + sqrt($discr)) / (2 * $a));
			$t2=((-$b - sqrt($discr)) / (2 * $a));
			return $this->x= array($t1,$t2);
		}
		else{
			return $this->x = array((-$b/2*$a));
		}
	}		
}
?>