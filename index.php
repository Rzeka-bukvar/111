<?php

namespace RzekaMansur;

ini_set('display_errors', 1);
error_reporting(-1);

include_once('RzekaMansur/RzekaMansur_Exception.php');
include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('RzekaMansur/Linear.php');
include_once('RzekaMansur/Square.php');
include_once('RzekaMansur/MyLog.php');


echo "Vvedite 3 parametra A, B , C. \n";
$paramens = explode(" ", fgets(STDIN));

try {
	if (count($paramens) != 3) {
		throw new RzekaMansurException("You entered not 3 numbers. Try again.");
	}
	$a = (float)$paramens[0];
	$b = (float)$paramens[1];
	$c = (float)$paramens[2];
	$square = new Square();
	$temp = $square->solve($a, $b, $c);
	MyLog::log("Korni uravneniya: ". implode(" , ", $temp));
}
catch (RzekaMansurException $e){
	MyLog::log($e->GetMessage());
}

MyLog::write()."\n";

?>