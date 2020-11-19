<?php
session_start();

session_unset();

session_destroy();

header('location:login.php')

?>




<?php

session_start();
if(!isset($_SESSION['usrname'])){
  header('location:login.php');
}

?>