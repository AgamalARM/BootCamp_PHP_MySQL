<?php

//variables
//static variables ,that is save its value at runtime
function add1() {
    static $x = 1 ;
    $x ++ ;
    echo $x;
}
add1();
add1();
add1();

//Super Global Variables
//$_GET,$_POST,$_REQUEST,$_SERVER,$_SESSION,$_FILES, $_COOKIE, $_ENV
//print_r($_SERVER);
var_dump($_SERVER);

// variable variable
$name = 'Ahmed';
$$name = 'Ahmed Gamal' ;  // $$name = $Ahmed
echo $Ahmed ;

//constant
define('PI', 3.14);
echo PI . '<br>';

//Modulus
echo 17%3 . '<br>';
$x = 37 ;
$x %= 3 ;
echo $x ;
//////////////////////////////
$name = 'Ahmed';
$name .= ' Gamal';
echo $name  ;
// preincrement - postincrement
$x= 5 ;
echo $x ++ . '<br>';
echo $x . '<br>'  ;
$y = 5;
echo ++ $y . '<br>';

// Equality operators
// == , !=   Check value
// === , !== Check value and type
$z = 8;
echo $z === 8 ;
