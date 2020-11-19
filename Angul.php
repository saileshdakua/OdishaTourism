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
                            <a class="dropdown-item" href="#">Puri</a>
                            <a class="dropdown-item" href="Angul.php">Angul</a>
                            <a class="dropdown-item" href="Sambalpur.php">Sambalpur</a>
                            <a class="dropdown-item" href="Dhenkanal.php">Dhenkanal</a>
                            <a class="dropdown-item" href="cuttack.php">cuttuck</a>
                            <a class="dropdown-item" href="Baleswar.php">Baleswar</a>
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
                      <li class="breadcrumb-item active" aria-current="page">Angul</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Angul</h4>
                   <p>The District of Angul situated at the heart of Odisha.Angul was a part of Undivided Dhenkanal District till early March 1993, but for the administrative convenience, Dhenkanal District was divided into two parts i.e. Dhenkanal and Angul vide State Government Notification No. DRC-44/93/14218/R. dated 27 March 1993. Angul District came into existence as a separate District on April 1, 1993.As per geographical map, Angul is situated in the center of the State and also regarded as the heart of Odisha. It gives highest revenue to the state exchequer. It is also one of the most advanced district of  our State. The district is well connected with Sytate capital & other districts headquarters. The largest coal mine  MCL (Mahanadi Coalfields Limited), National Aluminium Company (NALCO), National Thermal Power Corporation (NTPC), Heavy Water Plant etc. are situated in the district. Apart from this industrial scenario, Angul is also famous for Satkosia gorge, beautiful natural dense forest, hills, rivers (Mahanadi, Brhamani) etc. The land is fertile due to flowing of river Mahanadi & Bramhani   and its tributaries. Rengali Reservoir on the river Brahmani also helped irrigation facility not only in Angul but also other districts like Dhenkanal, Cuttack, Jajpur and Keonjhar. Due to rapid industrialization, the cosmopolitan culture is visible in many parts of the district but the traditional art, culture, literature, life style have also made Angul District proud. Its cultural heritage is also unique in the State.Like many other region of the State of Odisha, a village administration was in place in olden days. The village was headed by a Pradhan, who usually was from inside the village and acted as village chief. Some people worked as washer men, smith, watchmen, barber for the whole village community. The pradhan allotted land for cultivation and accepted a part of the produce in return. With the intervention of the British Govt. gradually outsiders replaced the insiders as pradhans but their role was limit to collection of revenue. He became a Govt. servant and not a community leader.Old village community institution like Bhagabat ghar, kothaghar etc. meant for community gathering, and accommodating outsiders are still in place in many villages. The maintenance of these places are met by the village community. The village community system has again generated a lot of interest now. Successive governments are trying to adopt many of the system followed in the past by the village community.As mentioned in the population details majority of the inhabitants of the district are Hindus. The Hinduism here has a touch of the worship method of the adivasis. The example of shapeless Gramdevati smeared with vermilion in different villages is a pointer towards this.A specific feature of the religious observance of people in Angul is the worship of miniature tanks, Pillars. Some of the inhabitants also follow Nath & Saiva as their deities. Another important religious practice in the district is Mahima Dharma. Apart from that people belonging to other religions are also staying in the district.The important festival of the district are Durge puja, GajaLaxmi Puja, Basantika Durga Puja,  Dipavali, Shiva ratri & Holi etc. The other festival include  Raja, Nuakhai, Gamha Purnima, Pus Punei are celebrated with traditional fervor and gaiety.The language of the people is Odia. It has many variants with slight alterations. Some of the tribal use their own language.The people of the district predominantly use rice as their staple diet. The daily meals consists of boiled rice, dal and vegetables. Chuda (flattened rice), Mudhi (pop rice), Pakhal (watered rice) also are popular food in the district. The tribals consume millet, pulses, beans, sweet potatoes etc.Now a days mostly people are using European garments like trousers and shirts .These garments have found their ways even to the remotest village. Elder males of middle class in many cases wear Dhoti and Shirt or Kurta . Poor and even middle class people males wear only Dhoti And use Gamuchha (napkins) on their upper part of the body.</p>
                 </div>
               </div>
               <div id="adjust" style="margin: 15px;">
                <ul class="nav justify-content-center">
                  <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Other places
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Cinema Halls</a>
                      <a class="dropdown-item" href="#">Picnic Spots</a>
                      <a class="dropdown-item" href="#">Park</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/php/project/Angul.php">Angul</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://goo.gl/maps/8gPzMkdEMpJzghbf8">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Jagannath Temple - 
                        <span class="text-muted">Angul</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        "The Jagannath Temple at Angul is known as “Saila Srikhetra” situated on the top of Sunasagad hill. The foundation of this grand temple was given on 21.2.1996 to build the temple like the model of world famous Lord Jagannath Temple of Puri . Then the construction work was progressed day by day with the help of administration and local people of Angul. Then the dream came true when the temple work was finished. At last, the District administration formed a trustee for the temple and the temple was opened for all public after completion of Pratistha Utsav on Dt.22.02.2002. It was a historic moment for the people of Angul. Now this place is called as Sailashreekhetra and people not only from Angul but also from whole State & other parts of India are coming to have a darshan of Lord Jagannath in this magnificent grand temple at Angul.
                        (Saila Srikhetra )
                        
                        Angul is a place of Sakta culture. The rise of the culture was seen in the 8th century AD. Sakta culture is visible around the Angul Budhi Thakurani temple. The temple is an old one, but the pilgrims visit the place not only to see the ancient sculpture but also to get a sight of the power of the deity here. Temple is constructed in the form of the Jagannath temple of Puri and also called the Jagannath temple of Angul."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/anglJagannathTemple.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Jagannath Temple - 
                        <span class="text-muted">Jindal</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       " Jindal Steel and Power Limited (JSPL) has built a temple inside Jindal Nagar, the township area of its 6 MTPA Steel Complex at Angul, informed a company release on Monday.
                       Priests performed uninterrupted rituals for a week to enshrine the deities in the temple. Thousands of devotees had first day darshan of the deities and enjoyed mahaprasad.
                       
                       The grand temple complex,spread over 3.7 acre, took four years for completion. The main temple, made in Made in Kalinga-style of nagar architecture is 67 feet high. Three types of stone – Porbandar stone from Gujarat, Markana marble from Rajasthan and Khandolite from Odisha – has been used for the construction. "</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/jindal.png" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Budhi Thakurani Temple - 
                        <span class="text-muted">Angul</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>"Angul is a place of Sakta culture. The rise of the culture was seen in the 8th century AD. Sakta culture is visible around the Angul Budhi Thakurani temple. The temple is an old one, but the pilgrims visit the place not only to see the ancient sculpture but also to get a sight of the power of the deity here. Temple is constructed in the form of the Jagannath temple of Puri and also called the Jagannath temple of Angul. Besides the main temple, two destinations are around this location. Get a look at those two temples too, which will cover on your same trip.

                        Near the temple, a replica of the Puri Jagannath Temple is built. It is famous as Saila Srikhetra. The presiding deity of Angul is Goddess Budhithakurani. Goddess Budhithakurani is worship in the form of a stone icon covered with vermillion. The shrine draws a huge crowd throughout the year. Pilgrims of different parts of Odisha visit the place for a darshan of Goddess."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/angbudhithakurani.png">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Deulajhari Temple- 
                        <span class="text-muted">Atthamallik</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "Deulajhari, the ancient citadel of Shaivism, is located in Deulajhari village in the Angul district of Odisha. This attractive place is having 24 acres (9.7 ha) and 55 decimals of land and covered with indigenous- pandanus forest (kiabana). It is known for a hot spring and a very old ancient Shiva Shree Siddeswar Baba temple.There are 24 hot springs around the temple although temple records say that once there were 84 such hot water springs."</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/deuljhari.jpeg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 150;">
            Satakosia (Wildlife Sanctuary)-
                        <span class="text-muted">Tikarpada</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>"The Satakosia Tiger Reserve encompasses an area of 963.87 Sq KM, once it was a part of AbhayaAranya (Unending Forest range) which connected Odisha to Central India.The name Satkosia literally means 7 Kos (a unit of distance measurement. Usually 1 Kos – 1.3 KM depending on the region). It is also known as the Gorge Sanctuary. The place is bursting with flora and fauna and is a coveted destination for the nature lovers.

                        Satakosia Tiger Reserve hosts some of the attractive tourism destinations with night stay at multiple points within the sanctuary, each showcasing a unique characteristics of this beautiful heaven."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/satkosia.png">
                      </img>
                    </div>
                  </div>
                </div>
                <ul class="nav justify-content-center" style="background-color: rgba(255, 140, 0, 0.603); color: rgb(143, 188, 143);">
                  <li class="nav-item">
                    <a class="nav-link active" href="#" style="font-size: 30px; font-family:monospace, Times, serif; font-weight: 300;">Other Places</a>
                  </li>
                </ul>
                <div id="extra" style="background-color: black; color: rgba(0, 255, 255, 0.582);">
                  <div class="row row-cols-1 row-cols-md-2" style="text-align: center;">
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 50px; margin-top: 15px;" >
                        <img src="photos/cineplex.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Cineplex</h5>
                          <p class="card-text"> Cineplex Hall [ Dolby Atoms | 3D ] One of the best cinema hall in Angul.Cinema showing major Bollywood films alongside some offerings from overseas.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-top: 15px; margin-left: 10%;">
                        <img src="photos/anglDerjang.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Derjang Irrigation Project</h5>
                          <p class="card-text">The Derjang Irrigation Project is a reservoir scheme constructed across river Ningara & Matalia near village Majhika in Angul Block. The catchment area is 399 Sq.Km at reservoir The main canal is 13.19 Km. having 33 nos. of minors & sub-minors.
Derjang Irrigation Project is a reservoir scheme and is the first Medium irrigation project of the State in the post independence era. </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 50px; margin-top: -100px;">
                        <img src="photos/anglNTPC.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Talcher Super Thermal Power Station </h5>
                          <p class="card-text">Talcher Super Thermal Power Station or NTPC Talcher Kaniha located in Angul district of the Indian state of Odisha is the first mega power plant of India to have an installed generation capacity of 3000MW. The power plant is one of the coal-based power plants of NTPC. </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 10%; margin-top: -100px;">
                        <img src="photos/angulRajbati.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Talcher Palace(Rajbati)</h5>
                          <p class="card-text">Talcher Palace, also known as the Samrat Sadan Palace is a lavish heritage property built around the 14th century. The main attraction of this palace is an imposing wheel-shaped stone structure that lies right above the main entrance. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="containerss marketing" style="text-align: center;">
                      <div class="row">
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/anglAmbedkarPark.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Dr.B.R. Ambedkar Park</h2>
                          <p>
                            Dr.B.R. Ambedkar Park is one of the most popular park in Nalco situated near Deer park in Nalco. The park has a massive statue of Dr.B.R. Ambedkar installed middle of it. The park is ideal for jogging, walking, relaxing, playing. 
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/anglEco.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Eco Park</h2>
                          <p>
                            One of the best park in Angul. There is a water boating area and jogging space  inside it. For adults its cost 5rs. ... Eco Park is located in Angul(Sikhyakpada).
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/gopapark.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Gopabandhu Park</h2>
                          <p>
                            Gopabandhu Park is one of the most popular parks in Angul situated near Stadium in Angul. The park has a massive statue of Dianoser installed right in the heart of it. The park is ideal for jogging, walking, relaxing, playing or day picnics.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          
                        </div>
                        <div class="col-lg-4">
                          
                        </div>
                        <div class="col-lg-4">
                          
                        </div>
                        <div class="col-lg-4">
                          
                        </div>
                        <div class="col-lg-4">
                          
                        </div>
                        <div class="col-lg-4">
                         
                        </div>
                        
                      </div>
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
                          <a href="http://localhost/php/project/Home.php" class="text-dark">Home</a>
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
                          <a href="#" class="text-dark">saileshdakua@gmail.com</a>
                          
                                                   
                        </p>
                        <p>
                          <i class="fa fa-envelope mr-0" style="font-size: 20px;">
            
                          </i>
                          <a href="#" class="text-dark">preetqeum8@gmail.com</a>
                          
                                                   
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
        </body>
</html>