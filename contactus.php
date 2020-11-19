

<?php

session_start();
if(!isset($_SESSION['usrname'])){
  header('location:login.php');
}

?>


<html>
<head>

<link rel="stylesheet" href="contact.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">

<title>Odisha Tourism</title>
</head>
<body>


 
    <div id="my_body">
      <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
         <a class="navbar-brand" href="Home.php"><img src="photos/logo.png" width="130px"class="d-inline-block align-top" alt="" loading="lazy"></a>

         <button class="navbar-toggler btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="margin-right:40px;">
              <li class="nav-item active">
                <a class="nav-link" href="Home.php"> Home <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  District
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Khordha.php">Khordha</a>
                  <a class="dropdown-item" href="#">Puri</a>
                  <a class="dropdown-item" href="Angul.php">Angul</a>
                  <a class="dropdown-item" href="Sambalpur.php">Sambalpur</a>
                  <a class="dropdown-item" href="Dhenkanal.php">Dhenkanal</a>
                  <a class="dropdown-item" href="cuttack.php">cuttuck</a>
                  <a class="dropdown-item" href="Baleswar.php">Baleswar</a>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='far fa-user-circle' style="font-size:18px"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href=login.php>Login</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
     </div>
    </div>





        <button class="main btn btn-dark" style="margin-left: 44%;"><b>CONTACT US</b></button>
    <form method="post" action="contactus.php">
      <div class="row" style="margin-left: 25%; margin-top: 5%;">
       <div class="form-group col-md-4">
          <input type="text" class="form-control" name="first" placeholder="First name :" style="width: 80%;">
       </div>
       <div class="form-group col-md-4">
          <input type="text" class="form-control" name="last" placeholder="Last name :" style="width: 80%;">
       </div>
      </div>
      <div class="row" style="margin-left: 25%;">
      <div class="form-group col-md-4">
        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Email id :" style="width: 80%;">
      </div>
      <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputPhoneno" name="phone" placeholder="Contact no :" style="width: 80%;">
      </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Enter Your Address :" style="width: 44%; margin-left:26%;">
      </div>
      <div class="row" style="margin-left: 25%;">
      <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputCity" name="city" placeholder="City :" style="width: 85%; ">
      </div>
      <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputState" name="state" placeholder="State :" style="width: 85%; margin-left:-23px; ">
      </div>
      <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputCountry" name="country" placeholder="Country :" style="width: 85%; margin-left:-36px; ">
      </div>
      <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip :" style="width: 85%; margin-left:-45px; ">
      </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="example" name="question" placeholder="Ask your Questions." style="width:44%; height:100px; margin-left:26%;"></input>
      </div>
      <button type="submit" class="btn btn-warning" name="onsub" style="margin-left:46.5%;">Submit</button>
    </form>
    </div>


<div id="has tag">
<footer id="foot">
      <div id="mycc">
      <button class="main btn btn-dark" style="margin-left: 44%;"><b><u>CONTACT US</u></b></button>
      <div class="conc text-center text-md-left mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Appstone</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p> NEXTSTACKS, 428 DLF Cybercity, Idco Info Park, Technology Corridor, Chandaka Industrial Estate, Patia, Bhubaneswar, Odisha 751024.</p>
          </div>
          <div class="col-md-3 col-lg-2 colxl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr  class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" style="color: rgba(255, 255, 255, 0.76);">
            <p>
              <a href="Home.php" class="text-dark">Home</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fa fa-envelope mr-0" style="font-size: 20px;">

              </i>
              <a href="#" class="text-dark">saileshdakua@gmail.com</a>
                                       
            </p>
            <p>
              <i class="fa fa-phone mr-0" style="font-size: 20px;">

              </i> <span><a href="#" class="text-dark">+91-7008594390</a>
              
                                
                              
            </p>

          </div>
        </div>
      </div>
      <div id="coc" style="background-color: #191f70;">
        <div class="contain">
          <div>
            

            <h6>Get connected with us on social media</h6>

          </div>
          <a href="#" class="fa fa-facebook"></a>
          <span><a href="#" class="fa fa-twitter"></a>
          <span><a href="#" class="fa fa-google"></a>
          <span><a href="#" class="fa fa-linkedin"></a>
          <span><a href="#" class="fa fa-youtube"></a>
          <span><a href="#" class="fa fa-instagram"></a>

        </div>

      </div>
    </div>
    </footer>
    <div class="card-footer text-muted">
      @ NEXTSTACKS.COM | 2020 | odishatourism.com
    </div>
   </footer>
</div>

</body>
</html>




<?php


 $con = new mysqli("localhost" , "root" ,"" ,"project");

 if($con->connect_error){
    die("connection failed" );
 } 
 if(isset($_POST['onsub'])){
 $first=$_POST['first'];
 $last=$_POST['last'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $country=$_POST['country']; 
 $zip=$_POST['zip'];
 $question=$_POST['question'];


 $sql = "insert into contactus values ('0','$first','$last','$email','$phone','$address','$city','$state','$country','$zip','$question')";


 if($con->query($sql)){
  echo "DATA INSERTED";

 }else{
  echo "ERROR OCCURED ?";
 }
  }


?>




