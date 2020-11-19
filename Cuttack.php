<?php

session_start();
if(!isset($_SESSION['usrname'])){
  header('location:login.php');
}

?>


<html>
    <head>
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
                <div id="navigation1" style="background-color: rgba(122, 81, 6, 0.582);">
                  <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="navbar-brand" href="Home.php"><img src="photos/logo.png" width="130px"class="d-inline-block align-top" alt="" loading="lazy"></a>
          
                   <button class="navbar-toggler btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto ">
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
                            <a class="dropdown-item" href="Baleswar.php">Baleswar</a>
                            <a class="dropdown-item" href="cuttack.php">cuttuck</a>
                            <a class="dropdown-item" href="Nayagarh.php">Nayagarh</a>
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
                          <a class="dropdown-item" href="login.php">Login</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                          </div>
                        </li>
                      </ul>
                      <form class="form-inline" style="margin-top: 10px;">
                      
                        <input class="form-control mr-sm-2"  type="search" placeholder="Search" aria-label="Search" >
                       
                        <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
                      </form>
                     </div>
                  </nav>
               </div>
               <div id="img">
                   <img src="photos/odisha-golden-triangle-tourism.jpg" style="width: 100%;">
               </div>
               <div>
                <nav aria-label="breadcrumb" >
                    <ol class="breadcrumb bg-dark mb-0">
                      <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Cuttack</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Cuttack</h4>
                   <p>Cuttack is a city in the eastern Indian state of Odisha. It's on a peninsula flanked by the Mahanadi River to the north and the Kathajodi River to the south. The ruins of moated Barabati Fort, once home to the Eastern Ganga dynasty, show the city’s medieval significance. Within the fort's walls lies the Shahi Mosque, with its 3 white domes. Nearby, Maa Cuttack Chandi Temple is a pilgrimage site for Hindu devotees.</p>
                 </div>
               </div>
               <div id="adjust" style="margin: 15px;">
                <ul class="nav justify-content-center">
                  <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Entertenment Places
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Cinema Halls</a>
                      <a class="dropdown-item" href="#">Shoping Malls</a>
                      <a class="dropdown-item" href="#">Park</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="Cuttack.php">Cuttuck</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://goo.gl/maps/cLpAPerPgQ9Xfgb19">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Barabati Fort - 
                        <span class="text-muted">Cuttack</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        Barabati Fort is a 13th-century fort built by the Ganga dynasty in Cuttack, Odisha, India. The ruins of the fort remain with its moat, gate, and the earthen mound of the nine-storied palace, which evokes the memories of past days. Today it sits next to the modern Barabati Stadium, the venue of various sport events and cultural programs. There is also a temple dedicated to Katak Chandi, the presiding deity of the city, not far away from the fort. Now there are plans to develop the old Gadakhai into a world class tourist destination with boating facilities and a world class park. The renovation work of the Gadakhai is going on in full swing.</b>
                    </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/cuttack/download.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Katak Chandi Temple - 
                        <span class="text-muted">Cuttuck</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        The Katak Chandi Temple is an ancient temple dedicated to the Goddess Chandi, the presiding deity of Cuttack, Odisha. The temple is located nearby the banks of the Mahanadi River. It is famous for the annual Durga Puja and Kali Puja festivals. The Durga Puja festivities are prominent in Maa Katak Chandi temple which takes place for 16 days starting from dark fortnight of Ashwina Krishna Ashtami till Ashwina shukla navami and Vijayadashami. The goddess popularly called as Maa Katak Chandi, sits and rules on the heart of the ancient city. She has four hands holding Paasha, Ankusha, gestures dispelling fear, and granting boon. She is worshiped as Bhuvaneshvari Mahavidya by Sevayatas belonging to Utkala Brahmins every day. Maa Chandi is worshipped in various incarnations of Durga during the puja. In Cuttack, people strongly believe Maa Katak Chandi as 'The Living Goddess'.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/cuttack/Maa-Katak-Chandi-Temple-Entrance-1.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Dhabaleswar Temple - 
                        <span class="text-muted">Cuttack</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>Dhabaleshwar Temple is located on the shoreline of river Mahanadi, 27 km from Cuttack city, Odisha, India. Devoted to deity Lord Shiva, this godly shrine with its pure green environs lifts up ones spirits to a morally superior plane.
                        Here the enchanting water spread of Mahanadi provides ample of opportunities for water sports.The temple is embellished with stone carvings which date back to the early 10th and 11th century. The serene ambiance of the temple inspires spiritual feeling among one and all.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/cuttack/download%20(1).jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Netaji Birth Place Museum - 
                        <span class="text-muted">Cuttack</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        The Netaji Subhash Chandra Memorial in Cuttack was a very pleasant surprise.

                        Tucked away in a nondescript corner of Cuttack, the house where Netaji was born has been converted into a memorial. It is well maintained and surrounded by a lush garden full of flowers. The museum itself is divided into sections related to his birth, early upbringing and later exploits, both as a Congress leader and as the leader of the Indian National Army.
                        There is a small souvenir shop just outside the museum selling reasonably priced memorabilia.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/cuttack/download%20(2).jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Odisha High Court Mueseum - 
                        <span class="text-muted">Cuttack</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>THE ODISHA HIGH COURT MUSEUM!
                        Arguably the most beautiful Museum of the State, OHC Museum located near Gadachandi Temple is a must visit. The Museum was opened by Chief Justice of India Dipak Mishra . The Museum has 4 Galleries and Showcases artifacts from across the state related to Law. It also houses books owned by Madhusudan Das.
                        Location: Near Gadachandi Temple, Barabati Fort Side.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="photos/cuttack/download%20(3).jpg">
                      </img>
                    </div>
                  </div>
                </div>  
                <footer id="foot">
                  <div id="myc">
                  <button class="main btn btn-dark" style="margin-left: 41.5%;"><b><u>CONTACT US</u></b></button>
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
                        <p>
                          <a href="gallery.php" class="text-dark">Gallery</a>
                        </p>
                      </div>
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <i class="fa fa-envelope mr-0" style="font-size: 20px;">
            
                          </i>
                          <a href="" class="text-dark">saileshdakua@gmail.com</a>
                                                   
                        </p>
                        <p>
                          <i class="fa fa-phone mr-0" style="font-size: 20px;">
            
                          </i> <span><a href="" class="text-dark">+91-7008594390</a>
                          
                                            
                                          
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
        </body>
</html>