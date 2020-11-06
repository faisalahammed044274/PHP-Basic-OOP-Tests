<?php

/*
### 3 major rules ###
a) start with $ sign; 
b) a-z, A-Z, 0-9,_ ;
c) No number in first;

### 3 standard rules ###
a) Small Letter;
b) meaningful;
c) readable ;





// $firstName = 'Rahim';
// $firstName = 'Karim';
// echo $firstName;


$firstName = "Faisal";
$lastName = "Ahammed";

echo "My full name is : ".' '. $firstName.' '.$lastName;
echo "<br>";
echo "<br>";
echo "<b> Datatype : <b/>";

$name = 'Rahim';
echo "<br>";
echo $name;
echo "<br>";
echo "Here ( RAHIM ) is a >> 'String data type'";
echo "<br>";
$number = 100;
echo $number;
echo "<br>";
echo " here ( 100 ) is a >>'Integer data type' ";
echo "<br>";
$float = 10.2;
echo $float;
echo "<br>";
echo " here ( 10.2 ) is a >> ' Float data type ' ";
echo "<br>";
$decision = true;
echo $decision;
echo "<br>";
echo "here ( TRUE ) is a >> Decision ' If true its show 1 and if false it's show 0/ none(empty) it called boolean data type '";
echo "<br>";
//
### Operator ###

## Arithmetic Operator :

*Binary (+,-,*,/,%)
*Uanry (++,==,-)

## Assignment Operator :

*=, +=, -=, /=, %=,.= 

## Conditional Operator

*>, >=, <, <=, ==, !=, ===, !== 

|||||||||||||||||||||||||||
## Logical Operator
|||||||||||||||||||||||||||


*&&,||,!

echo "<br>";


|||||||||||||||||||||||||||
// Binary operator >>>
|||||||||||||||||||||||||||
// $x = 10; $y = 20;
// echo $x + $y;
// echo '<br/>';
// echo $x - $y;
// echo '<br/>';
// echo $x * $y;
// echo '<br/>';
// echo $x / $y;
// echo '<br/>';
// echo $x % $y;
// echo '<br/>';
|||||||||||||||||||||||||||
// Unary operator >>>
|||||||||||||||||||||||||||
// $x=10;
// echo --$x; //post increment
// echo '<br>';
// echo $x--;
// echo '<br>'; //pre increment
// echo $x;
// echo '<br>';
// echo --$x;
// echo '<br>';
// echo -$x;

|||||||||||||||||||||||||||
// Assignment Operator >>>
|||||||||||||||||||||||||||

// $x = -10;
// $y = 20;

// echo $x+=$y;    //10    //x = x + y : Addition 
// echo '<br>';
// echo $x-=$y;    //-10   //x = x - y : Subtraction (+*- : -)
// echo '<br>';
// echo $x*=$y;    //-200  //x = x * y : Multiplication (+*- : -)
// echo '<br>';
// echo $x/=$y;    //-10   //x = x / y : Division (+*- : -)
// echo '<br>';
// echo $x%=$y;    //-10   //x = x % y : Modulus (+*- : -) vagses
// echo '<br>';
// echo $x.=$y;    //1020  //x = $x.$y : Concatenate (+*- : -)

|||||||||||||||||||||||||||
// Conditional Operator //
|||||||||||||||||||||||||||

$x = 20;
$y = '20';
// in php,  if true it show 1 if false its shown nothing. //
// echo $x>$y;
// echo '<br>';
// echo $x<=$y;
// echo '<br>';
// echo $x==$y; // in php, if data types are not same then its show //
// echo '<br>';
// echo '<br>';
// echo $x!=$y;


$x = 30; $y = 20; $z=10;

echo ($x>$y) && ($y>$z);    // && True if both (a and b) are true
echo '<br>';
echo ($x>$y) || ($y<$z);    // || True if either (a or b) is true
echo '<br>';
$a = true;
echo !$a;                   //! 	Not 	!$x 	True if $x is not true
echo '<br>';
echo $a;                    //! 	Not 	!$x 	True if $x is not true
echo '<br>';
AND - all the stated conditions must return true value

OR - one among the given conditions must be true

! - flips true to false or vice versa
*/

/*
|||||||||||||||||||||
    Statements in PHP
|||||||||||||||||||||

* Single Line Statement

* Conditional Statement
    a) IF
    b) IF ELSE
    c) SWITCH

*Repeated Statement
    a) FOR
    b) WHILE
    c) DO WHILE
    d) FOREACH

*/

// $x = 10;
// $y = 20;
// $z = 31;

// if ($x>$y) {
//     $z = $x + $y;
//     echo $z;
// } else if ($y<$z) {  // akta condition true hole porer block of code ar read korbe na.
//     echo 'Hello Bangladesh';
// } else if ($z>$x) {
//     echo 'Hello Dhaka';
// } else {
//     echo "Hello PHP";
// }

// switch ($z) {
//     case '10':
//         echo 'Hello World';
//         break;
//     case '20':
//         echo 'Hello Bangladesh';
//         break;
//     case '30':
//         echo 'Hello Dhaka';
//         break;
//     default :
//         echo 'Hello Spaceship';
    
// }

/////////////////////////
// if statement
////////////////////////

// $x = 10;
// $y = 20;

// if (condition) {
// 	code to be executed if condition is true;
// }

// if($x<$y) {
//     echo "Code to be execute if condition is true";
// }

// $t = date("H");
// if ($t < "20") {
//     echo "Have a good day!";
// } 

/////////////////////////
// if...else statement
////////////////////////

// $x = 10;
// $y = 20;

// if (condition) {
// 	code to be executed if condition is true;
// } else {
// 	code to be executed if condition is false;
// }

// $t = date("H");
// if ($t < "20") {
// 	echo "Have a good day!";
// } else {
// 	echo "Have a good night!";
// }

// Example :
// Without using AND

$a = 10;
$b = 20;
$c = 30;

if($a > $b) {
    if($a > $c){
        echo 'A is greater'.$a;
    } else {
        echo 'C is greater '.$c;
    }
} else{
    if($b > $c) {
        echo 'C is greater'.$b;
    }else{
        echo 'D is greater'.$c;
    }
}







?>

