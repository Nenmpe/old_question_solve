<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    
$connect=mysqli_connect('localhost','root','131119','register');
$sql="insert into user(name,email,uname,password) values('$name','$email','$uname','$pass')";


$result=mysqli_query($connect,$sql);

if($result){
    echo "Success";
}

else{
    echo "Not Successfull";
}
}

?>