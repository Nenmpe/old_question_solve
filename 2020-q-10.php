<?php
interface Override{
    function hello();
    function hi();
    function welcome();
}

class Over implements Override{
    
    function hello(){
        echo "Hello<br>";
    }

    function hi(){
        echo "Hi<br>";
    }

    function welcome(){
        echo "Welcome<br>";
    }
}

$obj=new Over();

$obj->hello();
$obj->hi();
$obj->welcome();
?>