<?php

session_start();
if(!isset($_SESSION['usrname'])){
  header('location:contact.php');
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
                            <a class="dropdown-item" href="Baleswar.php">Baleswar</a>
                            <a class="dropdown-item" href="Angul.php">Angul</a>
                            <a class="dropdown-item" href="Sambalpur.php">Sambalpur</a>
                            <a class="dropdown-item" href="Dhenkanal.php">Dhenkanal</a>
                            <a class="dropdown-item" href="cuttack.php">cuttuck</a>
                            <a class="dropdown-item" href="Nayagarh.php">Nayagarh</a>
                            
                         </div>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="contactus.php">Contact us</a>
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
                      <li class="breadcrumb-item active" aria-current="page">Baleswar</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Baleswar</h4>
                   <p>Balasore or Baleshwar is a city in the state of Odisha, about 194 kilometres (121 mi) north of the state capital Bhubaneswar and 152 kilometres (94 mi) from Kolkata, in eastern India. It is the largest city of northern Odisha and the administrative headquarters of Balasore district.</p>
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
                    <a class="nav-link active" href="Baleswar.php">Baleswar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://rb.gy/jgnmhv">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        KhirachoraGopinath Temple - 
                        <span class="text-muted">Baleswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        The mystic temple dedicated to Lord Krishna. According to popular legend, the deity of Gopinath was found by King LangulaNarasimha Deva who was on a pilgrimage and was installed at Remuna by the King between 1238 AD and 1264 AD.The temple derives its name from the folklore that revered Saint Madhavendra Puri during his visit to the temple got enamored by the kheer (sweetend milk) served to the Lord and had the urge to taste it, but being a saint he reconciled. Lord Krishna appeared in the dream of the temple priest and said he had hidden a pot of kheer and ordered it to be served to his beloved devotee Saint Madhavendra Puri. The name KshirachoraGopinath (lord who stole the kheer) stuck and the temple came to be known as thus.
                    </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/balasore/download.jpg" height="1024" width="500">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Emmami Janannath Temple - 
                        <span class="text-muted">Remuna</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        Immami Jagannath temple situated at a distance of 7 k.m. from the district headquater of Balasore.The newly constructed Jagannath Temple is a wonderful architechtural model which attracts agood number of visitors to this site.made in the year 2015 with red stone having many side deities in the temple campus. all the ritual are being observed as per the Jagannath Temple Puri.The stone curving and the manumental artifact draws the attaction of visitors.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/balasore/2018052497-olw9y43yg4ug68etlpqbf18ypxcg2buntacx18abuy.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Chandaneswar Temple - 
                        <span class="text-muted">Baleswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>Chandaneswar is an acclaimed religious and cultural site of North Odisha which is famous for Lord Shiva temple. Chadak Mela is an important festival of this holy shrine. During Chadak Mela(month of April) and Shivarati lakhs of pilgrims, devotees of Odisha , West Bengal, Bihar and other places of India visit place to pay obeisance to Lord Chandaneswar.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/balasore/2018051817-olw9xxj34alfwyodo4vxfkwqk88vkg4jgdsioak32i.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Chandipur - 
                        <span class="text-muted">Baleswar</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                        Chandipur, is a beach in Baleswar District, Odisha, India. The beach is located on the shore of Bay of Bengal and is approximately 16 kilometers from the Baleswar Railway Station. The beach is unique in a way that the water recedes up to 5 kilometers during the ebb tide. Due to its unique circumstances, the beach supports bio-diversity. Horseshoe crab is also found here on the beach towards Mirzapur, the nearby fishing market and community at the confluence of the Budhabalanga River (Balaramgadi). It is a suitable picnic spot. One of Odisha Tourism's Panthanivas (guest house) is situated here.</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/balasore/download%20(1).jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Talasari Beach- 
                        <span class="text-muted">Baleswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>Talasari Beach is a beach in the Baleswar district of Odisha, India. It lies on the north-eastern coast of India.
                        The name Talasari is derived from the two words Tala (ତାଳ) (meaning Palm) and Sari/Sarani (ସାରି/ସାରଣୀ) (meaning row). The palm trees surrounding the place gives such a name to it.[1] The word Tala also means rhythm, which is reflected in the sea waves lapping against the shore.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="photos/balasore/330px-Talsari_1.jpg">
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
                          <a href="Gallery.php" class="text-dark">Gallery</a>
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