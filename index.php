<?php
class A
{	
}

class B extends A
{
	public $string;
	public $string3;
	public function __construct($a,$b)
	{	
		$this->string3 = $b;
		$this->string = $a;
	}
}

class C extends B
{
	public $string2;
	public function __construct($a,$b,$c)
	{
		$this->string2 = $c;
		parent::__construct($a,$b);
	}
}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$a4 = new A();
$a5 = new B($a1, $a2);
$a6 = new C($a5, $a3, $a4);

echo '<pre>';
var_dump($a6);
echo '</pre>';

?>