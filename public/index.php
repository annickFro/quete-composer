<?php

require '../src/Hello.php' ;
use App\Hello;

$hi = new Hello() ;

//var_dump($hi) ;

echo $hi->talk() ;