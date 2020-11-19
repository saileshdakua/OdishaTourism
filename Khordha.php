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
                   <a class="navbar-brand" href="home.php"><img src="photos/logo.png" width="130px"class="d-inline-block align-top" alt="" loading="lazy"></a>
          
                   <button class="navbar-toggler btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto ">
                        <li class="nav-item active">
                          <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
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
                      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Khordha</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Khordha</h4>
                   <p>Khordha district is an administrative division of the state of Odisha, India. It was formed on April 1, 1993, by the division of former Puri District into Puri, Khordha and Nayagarh districts . In the year 2000 the district name was changed to Khordha. The district headquarters is Khordha Town. The capital city of Bhubaneswar is located in this district.Khordha is the most urbanized of all the districts of Odisha. Khordha Road, the railway station that serves the town is also the divisional headquarters of the East Coast Railway of the Indian Railways. Khordha is known for its brass utensils, cottage industries, railway coach manufacturing, and cable manufacturing unit.</p>
                 </div>
               </div>
               <div id="adjust" style="margin: 15px;">
                <ul class="nav justify-content-center">
                  <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Other Places
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Cinema Halls</a>
                      <a class="dropdown-item" href="#">Shoping Malls</a>
                      <a class="dropdown-item" href="#">Park</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Bhubaneswar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://goo.gl/maps/aFcgvBfZpFWXtFydA">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Lingaraj Temple - 
                        <span class="text-muted">Bhubaneswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        "Lingaraja Temple is a Hindu temple dedicated to Shiva and is one of the oldest temples in Bhubaneswar, the capital of the Indian state of Odisha. The temple is the most prominent landmark of Bhubaneswar city and one of the major tourist attractions of the state.

                        The Lingaraja temple is the largest temple in Bhubaneswar. The central tower of the temple is 180 ft (55 m) tall. The temple represents the quintessence of the Kalinga architecture and culminating the medieval stages of the architectural tradition at Bhubaneswar.Bhubaneswar is called the Ekamra Kshetra as the deity of Lingaraja was originally under a mango tree (Ekamra) as noted in Ekamra Purana, a 13th-century Sanskrit treatise. The temple is active in worship practises, unlike most other temples in Bhubaneswar and Shiva is worshipped as Harihara, a combined form of Vishnu and Shiva. The temple has images of Vishnu, possibly because of the rising prominence of Jagannath sect emanating from the Ganga rulers who built the Jagannath Temple in Puri in the 12th century.

                        Lingaraja temple is maintained by the Temple Trust Board and the Archaeological Survey of India (ASI). The temple has an average of 6,000 visitors per day and receives lakhs of visitors during festivals. Shivaratri festival is the major festival celebrated in the temple and event during 2012 witnessed 200,000 visitors. The temple compound is not open to non-Hindus, but there is a viewing platform beside the wall offering a good view of the main exteriors."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/Lingaraj-temple(khordha).webp">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Khandagiri and Udayagiri - 
                        <span class="text-muted">Bhubaneswar</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "Udayagiri and Khandagiri Caves, formerly called Kattaka Caves or Cuttack caves, are partly natural and partly artificial caves of archaeological, historical and religious importance near the city of Bhubaneswar in Odisha, India. The caves are situated on two adjacent hills, Udayagiri and Khandagiri, mentioned as Kumari Parvata in the Hathigumpha inscription. They have a number of finely and ornately carved caves built during the 1st century BCE.It is believed that most of these caves were carved out as residential blocks for Jaina monks during the reign of King Kharavela.Udayagiri means "Sunrise Hill" and has 18 caves while Khandagiri has 15 caves.

                       The caves of Udayagiri and Khandagiri, called lena or leṇa in the inscriptions, were dug out mostly during the reign of Kharavela for the abode of Jaina ascetics. The most important of this group is Ranigumpha in Udayagiri which is a double storeyed monastery. Other important caves include Hathi gumpha, Ananta gumpha, Ganesha gumpha, Jaya Vijaya gumpha, Mancapuri gumpha, Bagha/Byaghra/Vyaghra gumpha and Sarpa gumpha. "</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/khandagiri(khordha).webp" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        RajaRani Temple - 
                        <span class="text-muted">Bhubaneswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>Rajarani Temple is an 11th-century Hindu temple located in Bhubaneswar, the capital city of Odisha (Orissa previously), India.The temple is believed to have been known originally as Indreswara. It is locally known as a "love temple" because of the erotic carvings of women and couples in the temple. Rajarani Temple is built in the pancharatha style on a raised platform with two structures: a central shrine called the vimana (sanctum) with a bada (curvilinear spire) over its roof rising to a height of 18 m (59 ft), and a viewing hall called jagamohana with a pyramidal roof. The temple was constructed of dull red and yellow sandstone locally called "Rajarani". There are no images inside the sanctum, and hence it is not associated with a specific sect of Hinduism</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/Raja_Rani_Temple_.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Dhauli (Santi-Stupa) - 
                        <span class="text-muted">Bhubaneswar</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "Dhauli is located on the banks of the river Daya, 8 km south of Bhubaneswar in Odisha, India.Also known as Peace Pagoda, is a Buddhist structure built jointly in 1972 by the Japan Buddha Sangh and the Kalinga Nippon Buddha Sangh. Situated on the opposite hill of Dhauli Giri, it was built through the Indo-Japanese collaboration. Stupa is domed on top with mushroom-like structures and adorned with ‘speaking’ stone panels. Reclining Buddha, an elephant procession, the bodhi tree and footprints of Buddha bearing the Chakra(wheel) adorn the main stone panels. The panels also comprise a sleeping beauty fanned by female attendants, procession on horseback and Emperor Ashoka renouncing war by offering his sword to Lord Buddha at Dhauli Giri."</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/dhauligiri-shanti-stupa.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Iskon Temple - 
                        <span class="text-muted">Bhubaneswar</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>International Society for Krishna Consciousness, also popularly known as the Hare Krishna movement is a spiritual society founded by His Divine Grace A.C. Bhaktivedanta Swami Prabhupada in July 1966 in New York. ISKCON belongs to the Gaudiya-Vaishnava sampradaya, a monotheistic tradition within Vedic culture. Today ISKCON comprises of more than 400 temples, 40 rural communities and over 100 vegetarian restaurants. It also conducts special projects throughout the world, such as “Food for Life”, the only free vegetarian relief program in the world.
                        The aim of ISKCON is to acquaint all people of the world with universal principles of self-realization and God consciousness so that they may derive the highest benefit of spiritual understanding, unity and peace.
                        The Vedic literature recommend that in the present age of Kali-yuga the most effective means of achieving self-realization is always hear about, glorify,
                        and remember the all-attractive Supreme Lord Sri Krishna. Therefore, it recommends the chanting of the Holy Names: Hare Krishna Hare Krishna KrishnaKrishna Hare Hare / Hare Rama Hare Rama RamaRama Hare Hare. This sublime chanting puts the chanter directly in touch with the Supreme Lord through the sound vibration of His Holy Name.</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/iskon.jpg">
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
                        <img src="photos/Nandankanan.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Nandankanan(zoologycal park)</h5>
                          <p class="card-text">Nandankanan Zoological Park is a 437-hectare zoo and botanical garden in Bhubaneswar, Odisha, India. Established in 1960, it was opened to the public in 1979 and became the first zoo in India to join World Association of Zoos and Aquariums in 2009.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-top: 15px; margin-left: 10%;">
                        <img src="photos/planetorium.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Pathanisamanta Planetorium</h5>
                          <p class="card-text">Pathani Samanta Planetarium is a planetarium in the city of Bhubaneswar in India named after astronomer Pathani Samanta. It was founded for creating awareness about acarries on activities like night sky viewing, audio visual programs and poster shows. It also displays various astronomical devices.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 50px; margin-top: -100px;">
                        <img src="photos/Bhubaneswar_State_Museum.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">State Museum</h5>
                          <p class="card-text">Odisha State Museum is a museum in Bhubaneswar, Odisha. In its original form it was established in 1932 and later moved to the current building in 1960.The museum is divided into eleven sections, viz, Archaeology, Epigraphy, Numismatics, Armoury, Mining & Geology, Natural History, Art & Craft, Contemporary Art, Patta Painting, Anthropology and Palmleaf Manuscripts.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 10%; margin-top: -100px;">
                        <img src="photos/stadium.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Kalinga Stadium</h5>
                          <p class="card-text">The Kalinga Stadium is a multi-purpose International stadium in Bhubaneswar, Odisha, India. Its foundation stone was laid by former chief minister of Odisha Late Biju Patnaik in 1978. It is situated in the heart of Bhubaneswar near Nayapalli area. It has facilities for athletics, soccer, field hockey, basketball, tennis, table tennis basketball, volleyball, Wall climbing and swimming.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="containerss marketing" style="text-align: center;">
                      <div class="row">
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/Keshari-1.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Keshari Talkies</h2>
                          <p>
                           Keshari Hall [ Dolby Atoms | 3D ] One of the best cinema hall in bhubaneswar and odisha.Cinema showing major Bollywood films alongside some offerings from overseas.
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/maharaja.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Maharaja Cinema Hall</h2>
                          <p>
                            Maharaja Picture Palace [ Christie 4K | Dolby ATMOS ].Modern cinema with digital technology for a line-up of blockbuster Indian and international films.It is a very good cinema hall with affordable price range.
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/Bmc_Bhawani_Mall.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>INOX, BMC Bhawani Mall</h2>
                          <p>
                            BMC Bhawani Mall is a five storied shopping mall complex located at Saheed Nagar, Bhubaneswar in the state of Odisha, India. Publicly opened in 2012, the mall is the second largest mall in Bhubaneswar.It contains above two hundred outlets, including cafeterias, food courts, restaurants, multiplex, parking space and a hypermarket.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/dine-home.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>DN Rengalia Mall</h2>
                          <p>
                           DN Rengalia Mall is located in Service Road South Tamando,DN Square,Kalinga Vihar,Patrapada The Mall has a perfect blend of international, national and regional brands for customers who seek the finer things in life .It offers an exclusive shopping experience with varied options for food, fashion and entertainment, in an atmosphere of sophistication and refinement.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/symphony.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Inox, Symphony Mall</h2>
                          <p>
                            Symphony Mall is a shopping mall in Bhubaneswar, India which opened on 1 April 2019.The mall has three shopping levels, two parking levels, and an entertainment and food court level.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/esplaned.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Esplaned One Mall</h2>
                          <p>
                            Esplanade One mall is located in Rasulgarh Industrial Estate Area, Bhubaneswar, Odisha, India.Esplanade One is one of the largest shopping malls in the state of Odisha,It is 7 Screen Multiplex.It has capacity to contains more than 200 outlets, including cafeterias, food courts, restaurants, family entertainment zones, multiplex and it has multi level parking.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/forest.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Forest Park</h2>
                          <p>
                            One of the largest park in Bhubaneswar. Well, the Park is located in the heart of Bhubaneswar and is in close proximity to the Bhubaneswar Airport and Railway station. The lawns are well maintained and lots of trees on the fringes of the park gives it a greener look.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/jaydev.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Jaydev Vatika</h2>
                          <p>
                            One of the best park in bhubaneswar they have 2 artificial waterfall and many picnic spot. For adults its cost 25rs. ... Jayadev Vatika is located in Bhubaneswar.
                          </p>
                        </div>
                        <div class="col-lg-4">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/gandhi.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Gandhi Park</h2>
                          <p>
                            Gandhi Park is one of the most popular parks in Bhubaneswar situated near Janta Maidan in Jaydev Vihar. The park has a massive statue of Mahatma Gandhi installed right in the heart of it. The verdant green lawns are ideal for jogging, walking, relaxing, playing or day picnics.
                          </p>
                        </div>
                        <p style="margin-left: 46.5%;">
                          <a class="btn btn-primary" href="#" role="button">View More >></a>
                        </p>
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
                          <a href="home.php" class="text-dark">Home</a>
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