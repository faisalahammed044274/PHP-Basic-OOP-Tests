<?php
require_once './pencilbox.php';

class Example extends Pencilbox 
{
    public $mobile = "01734243939";
    protected $email = "info@domain.com";
    private $location = "Karwanbazar";
    
    public function one($name) {
        echo $name;
    }
    
    protected function two() {
        echo "In Two";
    }
    
    private function three() {
        echo "In Three";
    }
    
}




?>
