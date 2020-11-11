<?php
namespace App\Classes;

class Calculator{
    public function myCalculator(){
        print_r($_POST);
        if ($_POST['btn'] == '+') {
            $result =$_POST['first_number'] + $_POST['second_number'];
            echo $result;
        } elseif ($_POST['btn'] == '-'){
            $result =$_POST['first_number'] - $_POST['second_number'];
            echo $result;
        } elseif ($_POST['btn'] == '*'){
            $result =$_POST['first_number'] * $_POST['second_number'];
            echo $result;
        } elseif ($_POST['btn'] == '/'){
            $result =$_POST['first_number'] / $_POST['second_number'];
            echo $result;
        }  elseif ($_POST['btn'] == '%'){
            $result =$_POST['first_number'] % $_POST['second_number'];
            echo $result;
        }
    }
        
        

}
?>