<?php
class Employee{
    private $name;
    private $address;

    function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }

    function get_name(){
        return $this->name;
    }

    function get_address(){
        return $this->address;
    }
}


class Permanent extends Employee{
    private $salary;
    private $post;

    function __construct($name,$address,$salary,$post){
        parent::__construct($name, $address);
        $this->salary=$salary;
        $this->post=$post;
    }

    function get_salary(){
        return $this->salary;
    }

    function get_post(){
        return $this->post;
    }

    // function displayAll($s){
    //     echo $s->name;
    //     echo $s->address;
    //     echo $s->salary;
    //     echo $s->post;
    //     echo "<br>";
    // }

    function displayAll() {
        echo "Name: " . $this->get_name() . "<br>";
        echo "Address: " . $this->get_address() . "<br>";
        echo "Salary: " . $this->salary . "<br>";
        echo "Post: " . $this->post . "<br><br>";
    }
}

// $student=array();
// $show=new Permanent();


// for($i=0;$i<20;$i++){
//     $student[$i]=new Permanent("Mikshan","Banepa",10000,"IT Engineer");
//     $show->displayAll($student[$i]);
// }

$emp=[];
$empl;
for($i=0;$i<20;$i++){
        $emp[$i]=new Permanent("Mikshan","Banepa",10000,"IT Engineer");
    }

foreach($emp as $employee){
    $employee->displayAll();
}
?>