<?php

class B{
    
    private $X;
    protected $_a;
    protected $_b;
	
    function task($a, $b){
        //aX+b=0
        
        $x = ((-1 * $b) / $a);

        $this -> $_a = $a;
        $this -> $_b = $b;
        return $this -> $X = $x;
    }

}

class A extends B{
    public $a1;
    public $a2;
    public $a3;
    public $a4;
    protected $_c	;

    function __construct($var1, $var2, $var3, $var4){
        $this -> $a1 = $var1;
        $this -> $a2 = $var2;
        $this -> $a3 = $var3;
        $this -> $a4 = $var4;
    }

    function sqrv($c){
        //aX^2 + bx + c = 0;
        $dis = (($_b * $_b) - 4 * $_a * $c);
        if ($dis > 0){
            $x1 = ((-1 * $_b) + (sqrt($dis)))/(2*$_a);
            $x2 = ((-1 * $_b) + (sqrt($dis)))/(2*$_a);
        } elseif ($dis == 0){
            $x1 = (-1*$_b)/(2*$_a);
        } elseif ($dis < 0){
            echo "2 Мнимых корня";
        }
    }
}

$ob1 = new B();
$ob2 = new B();
$ob3 = new B();
$ob4 = new B();
$obA = new A($ob1, $ob2, $ob3, $ob4);

var_dump($obA);
?>