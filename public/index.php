<?php

require '../vendor/autoload.php';
use App\Hello;

$hi = new Hello() ;

//var_dump($hi) ;

echo "\n" . $hi->talk() . "\n";