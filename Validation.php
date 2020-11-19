<?php

session_start();
header('location:Home.php');


$con = new mysqli("localhost" , "root" ,"" ,"project");


$usrname=$_POST['usrname'];
$password=$_POST['password'];

$sname = "select * from user  where usrname = '$usrname'  &&  password = '$password' ";

$results = mysqli_query($con, $sname);
$nums = mysqli_num_rows($results);

if($nums == 1){
    $_SESSION['usrname'] = $usrname;
   header('location:home.php');
}else{

header('location:login.php');

}


?>