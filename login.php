<html>
    <head>

        <link rel="stylesheet" href="login.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        

        <title>Odisha Tourism</title>
   </head>

   <body>

   <div class="container">
       <div class="login-box">
       <div class="row">
           <div class="col-md-6 login-left">
               <h2 style="margin-left: 90px">Login Here</h2>
               <form action="Validation.php" method="post">
                   <div class="form-group" style="margin-top: 50px">
                       <lable>Username</lable>
                       <input type="text" name="usrname" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <lable>Paassword</lable>
                       <input type="password" name="password" class="form-control" required>
                   </div>
                   <button type="submit" class="btn btn-primary" style="margin-left: 130px">Login</button>
               </form>
           </div>
           <div class="col-md-6 login-right">
               <h2 style="margin-left: 70px">Register Here</h2>
               <form action="" method="post">
                   <div class="form-group">
                       <lable>Email Id</lable>
                       <input type="email" name="email" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <lable>Username</lable>
                       <input type="text" oninput="myuser()" id="user" name="usrname" class="form-control" required>
                       <span id="pass2" style="color:black"></span>
                   </div>
                   <div class="form-group">
                       <lable>Paassword</lable>
                       <input type="password" oninput="myfun()" id="passwords" name="password" class="form-control" required>
                       <span id="pass" style="color:black"></span>
                   </div>
                   <button type="submit" name="onsub" class="btn btn-primary" style="margin-left: 130px">Register</button>


                   <?php
                   

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

               </form>
           </div>
       </div>
       </div>
   </div>


       
   </body>


</html>   