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
                      <li class="breadcrumb-item active" aria-current="page">Nayagarh</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Nayagarh</h4>
                   <p>Nayagarh District Covering an geographical area of 3890 sq km consists of total 962789 population as per 2011 census. The total male population of the District is 502636 and female population is 460153. As per administration is concerned, the District has got one sub division namely Nayagarh. There are 8 Tahasils, 8 Blocks, 14 Police stations, 194 Grampanchayats and 1702 villages functioning in the District.</p>
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
                    <a class="nav-link active" href="Nayagarh.php">Nayagarh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://www.google.com/maps/place/Nayagarh,+Odisha/@20.1267865,85.0864961,14z/data=!3m1!4b1!4m5!3m4!1s0x3a187b2cc5e2274d:0x4515921059955452!8m2!3d20.1231332!4d85.1038426">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Nilamadhab Temple - 
                        <span class="text-muted">Nayagarh</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        Sri Nilamadhava Temple is very old and famous Vishnu temple which is near to the bank of Mahanadi, in Kantilo. which is present near to the twin hills with a surrounding forest. A permanent flow of holy water from the feet of Lord Nilamadhava is another attraction of the spot. Lord Siddheswar is also present which is another highlight of the place. Lord Nilamadhav occupies a central position in the cult of Lord Jagannath. Even now also Lord Nilamadhava shrine is present on the right side of Lakshmi temple in Puri Jagannath Temple.</b>
                    </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/nayagarh/nilamadhab.jpg"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Odagaon - 
                        <span class="text-muted">Nayagarh</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        Odagaon is known for the Temple of Lord Raghunathjew. It is one of the famous temples in Odisha dedicated to Lord Ramachandra. This temple has beautiful wooden idols of Sri Raghunath, Sita and laxman enshrined in it. The Kalash of the temple is made of pure gold. A popular legend associated with temple states that famous poet of 17th century, Kavisamrat Upendra Bhanja, had composed his magnum opus- Baidehisha Vilas, here at the feet of Sri Raghunath. Ramanavami is the most important festival celebrated here. Odagaon is 26 kms away from Nayagrah (town). It is said that the renowned poet of Odisha, Upendra Bhanja mediated here and attained perfection in the Rama Taraka Mantra. This temple was built around 1903.Tourists can avail medical facility at CHC, Odagaon which is nearest to the place. SBI Odagaon is the nearest Bank to the spot.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/nayagarh/2018051619.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Udayapur Library - 
                        <span class="text-muted">Nayagarh</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>The Banchhanidhi Pathagara, Sri Aurobinda Sangrahalaya and the Jadumani Sahitya Sansada, established by the late Dasarathi Pattnaik (known as Dasia Aja) in a non descript village Udayapur, in culturally rich district of Nayagarh, is a center for pilgrimage for the lovers of literature and culture. Scholars of repute across the world visited this institution.There are 50, 0000 books in different languages and dictionaries in 30 languages. The magazine collection has a rich collection of 65,000 magazines.The museum has 42 sections and has a collection of rare sculptures, minerals, arts, crafts, amours, coins and postal stamps etc.Tourists can avail medical facility at CHC, Mahipur which is nearest to the place. SBI Nuagaon is the nearest Bank to the spot.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/nayagarh/2018052362-1024x683.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Dakhinakali Temple - 
                        <span class="text-muted">Nayagarh</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        Dakshina Kaali Temple is one of the most famous temple in Nayagarh District. People of Nayagarh enjoy their life with the grace of maa Dakshinakali.The temple premises encompass Maa Dakshinakaali temple, Ganesh temple, Siva temple and maa Lakshmi temple.When ever someone buys a new vehicle, they always go to the temple to worship the goddess to safeguard them.
                        The main festival is Pana Samkranti. It is celebrated asvthe beginning of rainy season. A special drink called Pana is prepared and served to friends and relatives. There will be huge gathering at the temple and there will be a mela where all residents of Nayagarh and near by villages.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/nayagarh/Dakhinakali.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Sarankul- 
                        <span class="text-muted">Nayagarh</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>Located 14 kms away from Nayagarh, Sarankul stands proud with the 15th century shrine of Sri Ladukeswar, popularly known as Ladu Baba. The presiding deity here is known to be the combined form of Hari (Vishnu) and Hara (Shiv) as is the case with Sri Lingaraj in Bhubaneswar. The festivals and rituals of Sri Ladukeswar are also similar to that of the Lingaraj temple. This shrine is the most prominent one from amongst a good number of Shaivite shrines dotting the region. Pilgrims from far flung places flock to Sarankul on the occasion of Mahashivaratri.
                        Tourists can avail medical facility at CHC, Odagaon which is nearest to the place. SBI Odagaon is the nearest Bank to the spot.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="photos/nayagarh/2018052385-1024x768.jpg">
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
                          <a href="" class="text-dark">Make a Trip</a>
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