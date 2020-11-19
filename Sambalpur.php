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
                      <li class="breadcrumb-item active" aria-current="page">Sambalpur</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Sambalpur</h4>
                   <p>Sambalpur District is the western part of state of Odisha and famous for it's Sambalpuri Saree The District is surrounded by Deogarh District in the East, Bargarh Districts in the West, Jharsuguda District in the North and Sonepur and Angul Districts in the South. The District of Sambalpur has a history full of events including Indian freedom struggle representing the different section of the society. Sambalpur is mentioned in the book of Ptomely as Sambalaka on the river Manada. Sambalpur District was subsequently divided into four separate Districts. Bargarh District was separated in 1993, and Jharsuguda and Deogarh Districts were separated in 1994.Sambalpur serves as the gateway to the bewitching western zone of Odisha . It is the epicenter of a very high profile and rich culture.Its culture and art is an unique proposition of dance, music, handicraft, believes, social values, traditional practices etc.From a much un-privileged and unknown rural area of this District crossed the boundary of the country and put its foot step in the foreign land. Since that day, sambalpuri song has got tremendous demand from various parts of the world. It is this part of Odisha where people believe in simplicity, unity and love to the nature. Here, tribals dance with the beats of Dhole, Madal, Nishan. People enjoy the get together with family members, friends in Nuakhai-Bhet Ghat,so called in Sambalpuri language. Again the District looks very colorful in the time of celebrating Sitalsasthi.Sambalpur is famous for its handloom textile works which has earned international reputation in recent times.Its main format well known asSambalpuri saree is becoming a must to wear for every Oriya. The textiles for their unique design and texture commonly come under the patent of Sambalpuri handloom.As we all know culture is the conglomerated pattern of language, social values, music, festivals etc.Agnya juhar. Muin sambalpur nu kahuchein. Eta hauchein maa ista devi samaleswari ra sahar( Hello sir, I am from sambalpur, the place of goddess Samaleswari.). In this way the inhabitants of this land introduce themselves to others. But the Principal language of the District is Oriya. Other Indian languages spoken by the people of Sambalpur District are Hindi, Urdu, Bengali, Telugu, Gujarati, Punjabi and Tamil. Tribal languages like Kisan, Kui, Oraon, Kharia etc. are also popularly spoken by the tribal people of the District. The language spoken in Sambalpur differs from that spoken in the Coastal Districts of Odisha. It is generally known as Sambalpuri and is spoken in Western part of Odisha.This is the land of tribal dance, where tribals dance with the rhythm of beautiful traditional songs. Most of the community dances of the District are connected with a function or the worship of a deity. The Folk-Dances of Sambalpur are so colorful that visitors enjoy it with lot of enthusiasm. </p>
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
                    <a class="nav-link active" href="http://localhost/php/project/Sambalpur.php">Sambalpur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://goo.gl/maps/pq23x7dSLhtrk4Lh8">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Samaleswari Temple - 
                        <span class="text-muted">Sambalpur</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        "The Jagannath Temple at Angul is known as “Saila Srikhetra” situated on the top of Sunasagad hill. The foundation of this grand temple was given on 21.2.1996 to build the temple like the model of world famous Lord Jagannath Temple of Puri . Then the construction work was progressed day by day with the help of administration and local people of Angul. Then the dream came true when the temple work was finished. At last, the District administration formed a trustee for the temple and the temple was opened for all public after completion of Pratistha Utsav on Dt.22.02.2002. It was a historic moment for the people of Angul. Now this place is called as Sailashreekhetra and people not only from Angul but also from whole State & other parts of India are coming to have a darshan of Lord Jagannath in this magnificent grand temple at Angul.
                        (Saila Srikhetra )
                        
                        Angul is a place of Sakta culture. The rise of the culture was seen in the 8th century AD. Sakta culture is visible around the Angul Budhi Thakurani temple. The temple is an old one, but the pilgrims visit the place not only to see the ancient sculpture but also to get a sight of the power of the deity here. Temple is constructed in the form of the Jagannath temple of Puri and also called the Jagannath temple of Angul."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/samaleimaa.jpeg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Mandhata Shiv Temple - 
                        <span class="text-muted">Maneswar</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       " Maneswar is a town in Sambalpur district, Odisha, India, situated 15 kilometres (9.3 mi) from Sambalpur. The pincode of Maneswar 768005. Nearby villages of this town are Sindurpank (3.6 km), Jhankarpali (4.2 km), Gunderpur (4.2 km), Kabrapali (7.3 km), Batemura (7.8 km), chhatabar (6.0 km) Ghenupali (8.0 km).There is a temple dedicated to Shiva ,the temple is famous for its large fresh water turtles kept in the temple pond. A recent addition is a promontory that extends midway into the pond for viewing the turtles. We saw 4 large turtles (Gangeticus spp) basking in the winter sun as they floated in the water at Maneswar.One of the oldest Shiva Temple in Western Odisha. Watch out for turtles attached to the Pond. You can also have "prasad" served out to devotes. "</b>
                     </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/maneswar.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Leaning Temple - 
                        <span class="text-muted">Huma</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>"This article is about Leaning temple of Huma. For other uses, see Huma (disambiguation).
                        
                        The Leaning Temple of Huma in India is one of only two leaning temples in the world.[1][2] It is located in Huma, a village situated on the bank of the Mahanadi, 23 km south of Sambalpur in the Indian state of Odisha. The temple is dedicated to the Hindu god Lord Bimaleshwar.
                        It is not known if this structure is leaning by design or for another reason. Although the edifice leans, the pinnacle of the temple is perpendicular to the ground."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/huma.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Hirakud Dam - 
                        <span class="text-muted">Sambalpur</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "Hirakud Dam is built across the Mahanadi River, about 15 kilometres (9 mi) from Sambalpur in the state of Odisha in India. Behind the dam extends a lake, Hirakud Reservoir, 55 km (34 mi) long. It is one of the first major multipurpose river valley projects started after India's independence.Before the devastating floods of 1936, Sir M. Visveswararya proposed a detailed investigation for storage reservoirs in the Mahanadi basin to tackle the problem of floods in the Mahanadi delta. In 1945, under the chairmanship of Dr. B. R. Ambedkar, the Member of Labour, it was decided to invest in the potential benefits of regulating the Mahanadi for multi-purpose use. "</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/Hirakuddam.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 150;">
                        Debrigarh Wildlife Sanctuary -
                        <span class="text-muted">Hirakud Dam Dyke</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>" Forest of Debrigarh (Barapahad, as known locally as it consists of 12("Bara" in local language) hills("Pahad" for hills)). Winter being the most favored time by tourist, we choose summer as chances of sighting wild animals is more for wild animals come out for quenching their thirst to nearby hirakud reservoir. A 30 Km drive encircling the reservoir itself is a "paisabasool" experience which feels like marine drive with hills, green countryside, forest patches on one side and the majestic Hirakud reservoir with waters till zenith on another.
                      Beautiful Eco Resorts developed by Forest Department (booked online via ecotourism website of odisha-all inclusive package with all 3 meals, snacks, boating, safari in own vehicle, wildlife film show etc.) situated in the most beautiful place inside the sanctuary just beside the reservoir; welcomed us with a beautiful homestyle cooked lunch. Service staff there are very cordial and provide sincere service through out the stay."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/debrigarh-wildlife-sanctuary.jpg">
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
                        <img src="photos/eylex.jpeg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Eylex</h5>
                          <p class="card-text"> Eylex Hall [ Dolby Atoms | 3D ] One of the best cinema hall in Sambalpur.Cinema showing major Bollywood films alongside some offerings from overseas.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-top: 15px; margin-left: 10%;">
                        <img src="photos/ghanteswarimaa.jpeg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Ghanteswari Temple</h5>
                          <p class="card-text">
                          Unique pathway through Chiplima Hydro-power station for the temple.Nice temple sorrounded by beautul scenery and hydro-power station is situated 33 kilometres from sambalpur. People gives ghanti (bell) to goddess after fulfill of their wishes. </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 50px; margin-top: -100px;">
                        <img src="photos/gudguda.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Gudguda Waterfall</h5>
                          <p class="card-text">The clear and shiny water streaming down from the rock-gulleys of the plateau was wonderful. There were several tourists witnessing this beauty of nature. The dense forests downstream of the waterfall added to the beauty.Gudguda waterfall is 30kms from kuchinda, water is coming step by step by three consequtive steps.Awesome place for picnic, Full of with beautiful nature.  </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 10%; margin-top: -100px;">
                        <img src="photos/budharajatemple.jpeg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Budharaja Temple</h5>
                          <p class="card-text">This is a Shiva temple situated at the top of the hill popularly known as Budharaja. This place is a must see for everyone coming for the first time to Sambalpur, the town situated in the western district of Sambalpur in Odisha.. You can reach the temple at hill top by car. But the journey to the temple by foot is thrilling and enjoyable. The surroundings of the temple is not very clean. The authority should be careful about this. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="containerss marketing" style="text-align: center;">
                      <div class="row">
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/deerpark.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Deer Park</h2>
                          <p>
                            It is a great place for family visit. We may call it small zoo where different birds and animals live specially deers.There were so many animals like sloth bear and leapord and do much.
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/ramsagarpark.webp" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Ramsagar Park & Musical Fountain</h2>
                          <p>
                            Well maintained Musical Fountain Park in the middle of Sambalpur town.A good place where couples and family can spend time.
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/senpark.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Sen Park</h2>
                          <p>
                            Good park for Morning and evening walk, safe for children.One of the oldest park. Once many people were hanging out their but now it is not so safe to be their at evening or early morning.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/ushakothi.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Ushakothi Wildlife Sanctuary</h2>
                          <p>
                            Ushakothi Wildlife Sanctuary, also known as Badrama Sanctuary, is a popular wildlife sanctuary situated 43 km north-east of Sambalpur, on the National Highway number 6.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/gandhiminar.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Gandhi Minar</h2>
                          <p>
                            It is located at Sambalpur near Hirakud dam and it is a very beautiful place.Best place for tourist and also visiting places with friends and family.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/mallsamblpurr.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>City Centre Mall</h2>
                          <p>
                            City Centre is the first and biggest mall of Western Odisha representing a perfect destiny for your business to initiate. It is the first complete mall with a hypermarket, retail, food court, entertainment and multiplex thus providing the ultimate shopping experience at Sambalpur. 
                          </p>
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
                          <i class="fa fa-envelope mr-0" style="font-size: 20px;">
            
                          </i>
                          <a href="" class="text-dark">preetqeum8@gmail.com</a>
                          
                                                   
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