<?php

session_start();


$con = new mysqli("localhost" , "root" ,"" ,"project");

if($con->connect_error){
    die("connection failed" );

}
if(isset($_POST['onsub'])){
$email=$_POST['email'];
$usrname=$_POST['usrname'];
$password=$_POST['password'];


$sql = "insert into user values ('0','$email','$usrname','$password')";

if($con->query($sql)){
  header('location:Home.php');
  echo "DATA INSERTED";

}else{
  
  echo $con->error;

}

}

?>

