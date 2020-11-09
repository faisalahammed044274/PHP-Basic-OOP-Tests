<?php
/* for > loops through a block of code a specified number of times.
 * While > loops through a block of code if and as long as specified condition is true.
 * do...while > loops through a block of code once, and then repeats the loop as long as a special condition is true.
 * foreach > loops through a block of code for each element in an array.
  
/////////////////////////
//the For loop Statement
/////////////////////////

//for (initiization; condition; increment){
//code to be execued;
//}


$a = 0;
$b = 0;

for ($i = 0; $i<5; $i++) {
    $a +=10;
    $b +=5;
}

echo ("At the end of the loop a = $a and b = $b");
*/
 

////////////////////////////
//The While loop statement
///////////////////////////

//while (condition){
//    code to be executed;
//}

//$i = 0;
//$num = 50;
//
//while($i < 10) {
//    $num--;
//    $num--;
//    $i++;
//    
//}
//echo ("loop stopped at i = $i and num = $num");



////////////////////////////
//The Do While loop statement
///////////////////////////

//do {
//    code to be executed;
//}
//while (condition);

//$i = 0;
//$num = 0;
//
//do{
//    $i++;
//}
//while ($i < 15);
//echo ("loop stopped at i = $i");

////////////////////////////
//The foreach loop statement
///////////////////////////

//foreach (array as value){
//    code to be executed;
//}

//$array = array (1,2,3,4,5,6,7,8,9,10);
//
//foreach ($array as $value) {
//    echo "value is $value <br/>";
//}

////////////////////////////
//The break statement
///////////////////////////

//$i = 0;
//
//while ($i < 10) {
//    $i++;
//    if ($i == 8)break;
//}
//echo ("loop stopped at i = $i");


////////////////////////////
//The continue statement
///////////////////////////

$array = array (1,2,3,4,5,6,7,8,9);

foreach ($array as $value) {
    if ($value == 5) continue;
    echo ("value is $value <br/>");
}
?>



