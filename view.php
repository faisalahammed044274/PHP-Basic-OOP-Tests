<?php
require_once'./exampleclass.php';

$example = new Example();
echo $example->one($_GET ['name']); 

//private & protected  are showing error for it's security concern'

//$_GET,$_COOKIE$,$_ENV.$_FILES,$_POST,$_REQUEST,$_SERVER,$_SESSION;
// This are main superglobal array



?>

<form action="" method="get">
    <input type="text" name="name"/>
    <input type="submit" name="btn" value="submit"/>
</form>


