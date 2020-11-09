<?php

require_once './student_class.php';


use App\classes\Student;
$student = new Student('This is a object.');
$student->hello('BASIS');
$student->test();


//use App\classes\Student;
//
//Student::test1();

//$student = new App\classes\Student();
//$student->test();
