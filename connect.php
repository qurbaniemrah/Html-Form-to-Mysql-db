<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    
}



$con=new mysqli('localhost','root','','form');

if($con) {
    $sql = "insert into `data`(name,email,mobile,password)values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result) {
        echo "Data inserted successufly";
    }else {
        die(mysqli_error($con));
    }
}else {
    die(mysqli_error($con));
}



?>