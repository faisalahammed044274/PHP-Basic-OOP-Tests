<?php

namespace App\classes;

class Student
{
    public function saveStudentInfo()
    {

        //method 1 == array

        $link = mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'student');
        $sql = "INSERT INTO tbl_students (name, email, mobile) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]')";
        if (mysqli_query($link, $sql)) {
            return "Array method run sucessfully";
        } else {
            die("Problem" . mysqli_error($link));
        }

        // method 2 == object

        // $obj = (object)$_POST;
        // $link = mysqli_connect($host='localhost',$user='root',$password='',$database='student');
        // $sql = "INSERT INTO tbl_students ( name, email, mobile) VALUES ('$obj->name', '$obj->email', '$obj->mobile')";
        // if (mysqli_query($link, $sql)) {
        //     return "Object method run sucessfully";
        // } else{
        //     die("Problem".mysqli_error($link));
        // }

        // method 3 = extract

        //     extract($_POST);
        //     $link = mysqli_connect($host='localhost',$user='root',$password='',$database='student');
        //     $sql = "INSERT INTO tbl_students (name, email, mobile) VALUES ('$name','$email','$mobile')";
        //    if (mysqli_query($link, $sql)) {
        //        return "Extract method run sucessfully";
        //    } else{
        //        die("Problem".mysqli_error($link));
        //    }
        {}
    }

    public function getAllStudentInfo()
    {
        $link = mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'student');
        $sql = "SELECT * FROM tbl_students";

        // //method 1
        // if(mysqli_query($link, $sql)){

        //     $queryResult = mysqli_query($link, $sql);

        if ($queryResult = mysqli_query($link, $sql)) {
            return $queryResult;

            //process to get data
            // while ($student = mysqli_fetch_assoc($queryResult)){
                 
            // echo '<pre>';
            // print_r($student);
            // }
            
        } else {
            die("Query Problem" . mysqli_error($link));
        }
    }

}
