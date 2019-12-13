<?php
    require __DIR__."/vendor/autoload.php";

use RzekaMansur\Log;
use RzekaMansur\Square;
use RzekaMansur\RzekaMansur_Exception;

$eq=new Square();

$a=0;
$b=0;
$c=0;

try {
    function entercheck($num,$letter)
    {
        $pattern = '#^[0-9]*[.]?[0-9]+$#';
        for (;;) {
            $num=readline("Enter $letter=");
            echo "\n";
            if(preg_match($pattern,$num))
            {
                return $num;
            }
            else {
                echo "Inappropriate symbols. Can only type numbers and dot\n";
            }
        }
        return $num;
    }

    $a=entercheck($a,'a');
    $b=entercheck($b,'b');
    $c=entercheck($c,'c');

    $eq->solve($a,$b,$c);
} catch (RzekaMansur_Exception $e) {
    Log::log("Error: ".$e->getMessage());
}

Log::write();
