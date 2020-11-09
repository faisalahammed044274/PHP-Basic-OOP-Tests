<?php
namespace App\classes;
class Student {

    public $name = 'Faisal Ahammed';
    protected $email = 'faisal@gmail.com';
    private $mobile = '01734243939';
    static $city= "Dhaka";
    public $demo;
    public $b;
    
    public function __construct($test){
//        echo 'In magic method.........';
        $this->demo = $test;
    }
    
    public function hello($a){
        $this->b = $a;
    }
    
    
    public function test() {
          echo $this->b;
//        echo 'In Test';
//        $this->world();
//        student :: world();
//        echo Student :: $city;
    }

//    public function test1() {
//        echo student::world();
//    }
//    
//    protected function hello() {
//        echo 'In Hello';
//    }
//    
//    private function world() {
//        echo 'In World';
//    }
}
?>

