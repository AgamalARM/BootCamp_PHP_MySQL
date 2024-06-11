<?php

// Scalar (int, float, string,..)

echo PHP_INT_MAX . '<br>';
echo PHP_INT_SIZE . '<br>';

$number = 13 ;
$floatNumber = -1.334323  ;
echo $floatNumber  . '<br>' ;
echo 6e5  .       '<br>' ;   // 6 * 10 ^  5
echo (6E-5 + 3 ). '<br>' ;  // (6 * 10 ^ -5) + 3
echo 3.4  . '<br>' ;        // integer
echo 'Welcome to class has $number students' . '<br>' ; // string ''
echo "Welcome to class has $number students" . '<br>' ; // string ""
echo "Welcome to class has {$number} students" . '<br>' ; // string ""
$num = '10num';
echo $num + 5    . '<br>'  ;
echo '===========================================' . '<br>';

// Compound(Array, Object)
// Array
$months = array(1,2,3,4,5,6,7,8,9,10,11,12);
echo $months[9] . '<br>'  ;
echo $months[12] . '<br>'  ;

//Type Casting to convert data type
//(array)  (object)  (boolean) (bool)  (int)  (string) (real)  (float)

$x = (bool)  8 ;
echo $x      .    '<br>'   ;
echo (int) "x122fff"     .    '<br>'   ; // false = 0
echo (int) "122fff"     .    '<br>'   ; //  122
$y = (array)  8 ;
echo $y     .    '<br>'   ; // cannot print array
settype($y, 'float');        // settype using as casting too
echo gettype($y)     .    '<br>'   ; // cannot print array
var_dump($y);
// is_array   is_int
echo is_float($y) ; 


?>