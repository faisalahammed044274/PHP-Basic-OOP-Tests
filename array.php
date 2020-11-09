<?php

///////////////////////
// Numeric Arrays 
//////////////////////

// $data [0] = 100;
// $data [1] = 200;
// $data [2] = 300;

////////////////////////////////////////
// Associative Arrays : alphabet/name
///////////////////////////////////////

// $ data [0] = 'Rahim';
// $ data [0] = 'Kahim';
// $ data [0] = 'Salim';
// $ data [0] = 'Dalim';

//$data = [10, 20, 30, 'rahim', 'karim','hhh'];

//single method
// echo $data[0];

// All arrays

//foreach ($data as $vue) {
//    echo $vue . ' ';
//}

////////////////////////////////////////////////////////////////////////
// Multidimentional Arrays : aker odhik hole multidimentional array
///////////////////////////////////////////////////////////////////////


// $data = [];

// $data [0] [0] [1] [1]= 10;
// $data [0] [1] = 20;
// $data [0] [2] = 30;

// $data [1] [0] = 40;
// $data [1] [1] = 40;
// $data [1] [2] = 40;


///////////////////////////////
//  professional & standard
//////////////////////////////

//$data = [
//    'Name' => 'Setu',
//    'City' => 'Dhaka',
//    'Country' => 'Bangladesh',
//    'Mobile' => '01734243939',
//];


//$students = [];

$students = [
    '0' => [
        'name'       =>  'Setu',
        'city'       =>  'Dhaka',
        'country'    =>  'Bangladesh',
        'mobile'     =>  '01734243939',
        'gender'     =>  'Male',
    ],
    '1' => [
        'name'       => 'Alex',
        'city'       => 'NewYork City',
        'country'    => 'NewYork',
        'mobile'     => '015856757551',
        'gender'     =>  'Male',
    ],
    '2' => [
        'name'       => 'Katie',
        'city'       => 'Los Angles',
        'country'    => 'United States',
        'mobile'     => '01585558939',
        'gender'     =>  'Female',
    ],
    '3' => [
        'name'       => 'Jhon',
        'city'       => 'London',
        'country'    => 'London',
        'mobile'     => '01855686314',
        'gender'     =>  'Male',
    ],
    '4' => [
        'name'       => 'Adnan',
        'city'       => 'Dhaka',
        'country'    => 'Bangladesh',
        'mobile'     => '01199475699',
        'gender'     =>  'Male',
    ]
];

//echo '<pre>';
//print_r($students);
//echo '<br>';
//var_dump($students);



//function write() {
//    echo "Your Document is here";
//}
//echo write();

function addFunction($a, $b) {
    $sum = $a + $b;
    echo "your addition is : $sum";
}
    addFunction(20,60);

//foreach ($students as $student) {
//    echo $student ['name'],' '. $student ['city'],' '.$student ['country'],' '.$student ['mobile'], '<br/>';
//}

//$students [0] ['name'] = 'Alex';
//$students [0] ['city'] = 'Los Angles';
//$students [0] ['country'] = 'United States';
//$students [0] ['mobile'] = '01816757551';
//
//$students [1] ['name'] = 'Setu';
//$students [1] ['city'] = 'Dhaka';
//$students [1] ['country'] = 'Bangladesh';
//$students [1] ['mobile'] = '01734243939';

//foreach ($students as $new) {
//    echo $new['name'].' '.$new['city'].' '.$new['country'].' '.$new['mobile'];
//}

?>
<!-- process-1-->

<!--<table border="1" width="600">-->
<!--    <tr>-->
<!--    <th>name</th>-->
<!--    <th>city</th>-->
<!--    <th>country</th>-->
<!--    <th>mobile</th>-->
<!--    <th>gender</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($students as $student) {?>
<!--    <tr>-->
<!--        <td>--><?php //echo $student['name']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['city']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['country']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['mobile']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['gender']; ?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->
<!---->
<!--process -2-->
<!---->
<?php //echo "<br>"; ?>
<!---->
<!---->
<!--<table border="1" width="600">-->
<!--    <tr>-->
<!--        <th>name</th>-->
<!--        <th>city</th>-->
<!--        <th>country</th>-->
<!--        <th>mobile</th>-->
<!--        <th>gender</th>-->
<!--    </tr>-->
<!--    --><?php
//    foreach ($students as $student) {
//     echo "<tr>";
//        echo '<td>'. $student['name'] .'</td>';
//        echo "<td> $student[city] </td>";
//        echo "<td> $student[country] </td>";
//        echo "<td> $student[mobile] </td>";
//        echo "<td> $student[gender] </td>";
//     echo "</tr>";
//    }
//    ?>
<!--</table>-->
