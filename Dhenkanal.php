

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
                      <li class="breadcrumb-item active" aria-current="page">Dhenkanal</li>
                    </ol>
                  </nav>   
               </div>
               <div class="jumbotron mb-0" style="background-color: rgba(0, 139, 139, 0.705);">
                 <div class="containers">
                   <h4 class="display-3 text-center">Hello,Welcome To Dhenkanal</h4>
                   <p>Dhenkanal District is surrounded by beautiful wild lives and forests.The District is situated on the Cuttack-Sambalpur road (NH 55) and on the Cuttack-Sambalpur or Baranga-Sambalpur railway line. The Dhenkanal District touches the boundary of Kendujhar district on its north, Cuttack district on south and bounded by Jajpur District on the east and Angul District on its west. It is commonly believed that the Dhenkanal District owes its name to a Savara chief named ‘DHENKA’ who formerly ruled over in this tract. Dhenkanal District covers an area of 4452 Sq Km. It has a vast area covered with dense forests and a long range of hills.This is the reason of calling the District as ‘Home of Elephants and tigers of the country’. The District lies between 85 degree 58’ E to 86 degree to 2’ E longitude and between 20 degree 29’ N to 21 degree 11’ N latitude.Dhenkanal District has a moderate climate.The District experiences hot with high humidity during April and May and cold during the winter months, i.e. December and January. The monsoon generally breaks during the month of June with the average annual rainfall being 1421.1 mm. As per the agriculture is concerned, the District produces a substantial agricultural yield and paddy, ground nut, cashew nut, potato, mango, jackfruit, sugarcane and some vegetables as its primary agricultural products.henkanal District’s has an ancient tradition of art and culture. The District’s handicraft industry has been widely acclaimed for its finesse. Its Dokra casting works, Brass/ Bell Metal works, Horn works, Straw works, Wood and stone carvings, Bamboo works, Tribal Jewellery works, Silver filigree works, Soft toys, Art textiles, Artistic pottery works and Woolen carpets have made a mark. These works has got much demand in the domestic as well as international market.Dhenkanal District’s varied culture is aptly displayed by the different religious groups residing there. Since the day of its inception, the different Hindu sects like Saivaism, Baishnavism, Shaktism etc. have been flourishing here along with Buddhism. This is the place where the Mahima Dharma originally originated.There are some major festivals of Dhenkanal District appositely reflecting its rich and diverse culture. The District’s celebration of Gajalaxmi Puja is an event worth mentioning for its eye-catching events.This festival continues for eleven days. During the festival, entire Dhenkanal town is decorated with Puja Mandaps and electrical lighting. On the occasion of Laxmi Puja the District administration organizes ‘Palishree Mela’ with the support of other Government agencies. The cultural programmes organized on the occasion add glamour and charm to the celebration of this festival.Every year during Mahasivaratri ‘Jagar Yatra’ is being observed at Kapilash.Devotees and pilgrims come from different corners of the country and assemble on the Kapilash Peak.Dussehra festival at Kamakhyanagar bears a special significance in the culture of Dhenkanal District.Goddess Durga is worshipped here at Kamakhyanagar with high spirits. Magha Mela which is celebrated at Joranda is the most famous festival of the ’Mahima Dharam’ followers. Every year it begins on ‘Magha Purnima’ and continues for four days. Bullock Festival of Bhuban has a special identity. Racing competition of bullocks is held during the Bullock festival.</p>
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
                      <a class="dropdown-item" href="#">Picnic Spots</a>
                      <a class="dropdown-item" href="#">Parks</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/php/project/Dhenkanal.php">Dhenkanal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://goo.gl/maps/UtymuFqMH6Tj6wWM8">Map View</a>
                  </li>
                </ul>
               </div>
                <div id="middlepage" style="background-color: rgba(32, 178, 171, 0.5);">
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Kapilas Temple - 
                        <span class="text-muted">Dhenkanal</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>
                        "The Temple at Kapilash known as the Chandrashekhar Temple is situated in the north eastern part of Dhenkanal town, Odisha, India at a distance of 26 km from the district headquarters.The temple is situated at a height of about 2239 feet from sea level. The main tower of the temple is 60 feet tall. There are two approaches to the temple. One is by climbing 1352 steps and the other is thru Barabanki or travelling by the twisting way. King Narasinghdeva I of Ganga Dynasty constructed the temple for Sri Chandrasekhar in 1246 CE as indicated in the Kapilash temple inscription.In the left side of the temple the Payamrta Kunda and in the right side the Marichi Kunda exist. The temple has a wooden Jagamohana. Sri Ganesh, Kartikeya, Gangadevi, etc. are found in the temple. Patita pavana Jagannath is installed in the temple as the Parsa Deva. Lord Vishwanath temple is also situated in Kapilash. According to some scholars this temple is older than the Chandrasekhar temple, hence it is known as Budha Linga. There are many legends about Kapilash pitha and its significance. Tradition describes it as the ashram of Kapila, to some scholars it is the second Kailash of Lord Shiva. Shridhar Swami who wrote commentary on Bhagavata Purana stayed there. There are some monasteries in the premises.Three ancient idols were stolen from the temple premises in November 2015. The three stone ancient idols were stolen from near the entrance of the famous temple, they were statues of Lord Ganesh, Goddess Durga and Goddess Bhairavi."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/dknlKapilash.png">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Sapua Dam - 
                        <span class="text-muted">Hindol</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "The architectural structure of this concrete barrage is framed in the shape of a snake. Even its current holding name ‘Sapua’ literally translates into snake.
                       The beauty of this dam is overwhelming. It attracts thousands of tourists during every picnic.The dam was originally built as a medium irrigation project by the Water Resource Department of Odisha, across a local nallah called ‘Sapua’ under the Mahanadi basin. This was reciprocally linked with the naming of this reservoir as ‘Sapua Dam.’ The dam was compled in 2006.
                       Once a barred area, now this zone has turned out to be the first choice for camping, sightseeing and picnic by tourists.  "</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/sapuadam.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Joranda Temple - 
                        <span class="text-muted">Dhenkanal</span>
                      </h2>
                      <p class="lead" style="margin-left: 20;"><b>"Joranda temple is famous as the religious headquarters of Mahima Dharma, Joranda houses the samadhi of Mahima Gosain, the preacher and propounder of the Mahima Cult. The other sacred tamples are the Sunya Mandira, Dhuni Mandira and Gadi Mandira. Pilgrims in large numbers pour into the Joranda fair for celebrations. This fair is held on the full moon day of Magha, which falls in January, February every year.Joranda Gadhi is a temple built in a location where three villages meet: Joranda, Natima and Patna. The temple is dedicated to the supreme lord. The followers of mahima dharma worship him as Sunya Brahma or the shapeless lord. No idol worship is permitted in this sect. The temple is dedicated to the supreme lord."</b>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/dknlJoranda.jpg">
                      </img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading" style="margin-left: 190;">
                        Saptasajya Waterfall -
                        <span class="text-muted">Dhenkanal</span>
                      </h2>
                      <p class="lead" style="margin-right: 10;"><b>
                       "A place of scenic beauty, Saptasajya is situated at a distance of about 11 km to the south of Dhenkanal town. According to legends, Pandavas spent some days of their incognito life (Agnuata vasa) in these hills. The temple of Raghunath, built in honor of Lord Rama, Laxman and Sita by Rani Ratnaprava Devi of Dhenkanal attracts large crowds every year on the day of Ramanavami, in the month of March-April. A small spring flowing close by enhances the beauty of the place. It is an ideal place for picnic and relaxation.According to the 2011 census, there are total 268 families residing in Saptasajya comprising 1091 persons. With 548 males and 543 females, the sex ratio of Saptasajya (991 women per 1000 men) which is higher than Odisha state average of 979. However, among children Saptasajya has 809 girls per 1000 boys, vastly lower than Odisha average of 941.Saptasajya village has higher literacy rate compared to Odisha. In 2011, literacy rate of Saptasajya village was 85.81% compared to 72.87% of Odisha. Male literacy stands at 88.02% while female literacy rate was 83.65%.This small village is situated at a distance of 11 kilometres (6.8 mi) from Dhenkanal and is well connected by road transport. The government constructed the road in 1982. Nearby villages include Badagila, Sadeibereni, Badrapalli, Kamning, Padmanavpur and Patrabhag."</b>
                      </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/dknlSaptasajya.jpg" style="margin-top: 20;"></img>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading" style="margin-left: 150;">
                       Kualo -
                        <span class="text-muted">Dhenkanal</span>
                      </h2>
                       <p class="lead" style="margin-left: 20;"><b>"Kualo is situated at a distance of 72 km from Dhenkanal. Kualo is a place that has several temples dedicated to different Hindu Gods. There are temples like Lord Kanakeswar, Lord Balunkeswar, Sri Baidyanath, Paschimeswar, Kapileswar, etc. Even though some portions of the temples are ruined, people throng the temples to seek the blessings of the Gods seated in those temples. The temples of Kualo feature some of the amazing temple architectures of Odisha. The temples are high and large in structure. Tourists, who are interested in archaeology, find the place very interesting for study. Even for the general tourists, the ancient temples and the natural beauty of the place attract them. This tourist spot can be visited throughout the year."</b>
                       </p>
                    </div>
                    <div class="col-md-5">
                      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="900" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/kualodknl.jpg">
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
                        <img src="photos/amarnathalldknl.jpeg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Cineplex</h5>
                          <p class="card-text"> Amarnath Talkies [ Dolby Atoms | 3D ] One of the best cinema hall in Angul.Cinema showing major Bollywood films alongside some offerings from overseas.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-top: 15px; margin-left: 10%;">
                        <img src="photos/dknlAnantasayanaSarang.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Anantasayana</h5>
                          <p class="card-text">Anantasayana issixty-seven kms from Dhenkanal, 23 kms from Angul and 3 kms from Talcher, is the Anantasyi image of Lord Vishnu, on the rocky bed of the river Brahmani at Saranga. The hoods of Ananta, the serpent king spreads over the head of Lord Vishnu as the crown and cover. </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 50px; margin-top: -100px;">
                        <img src="photos/dknlSaitemple.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Sri Dattatreya Sai Ashram </h5>
                          <p class="card-text"> Sri Dattatreya Sai Ashram is a huge complex with the Main Temple covering over 10,000 square feet. The total area of the Ashram is over Thirty Acres. On site, there is an Yagna Mandap, Prayer Hall filled with photos of great Spiritual leaders, Dhyana room, Akhanda Dhuni (Dwarakamai), Kalpabrikshya Tree and a Graha Mandala. A second complex has accomodations for devotees to stay in during their visit to the Ashram.  </p>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card" style="height: 50%; width: 80%; margin-left: 10%; margin-top: -100px;">
                        <img src="photos/dandadharadknl.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">Dandadhara Dam</h5>
                          <p class="card-text">Dandadhar
                            67 km from Dhenkanal and 30 km from Kamakshyanagar, Dandadhar is the site of an irrigation project on the river Ramial- an ideal place for outings. Its blue expanse of sparkling waters caged in a sun-bathed valley is a thrill for the searching eyes. Best for Picnic during Winter (December- February).  </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="containerss marketing" style="text-align: center;">
                      <div class="row">
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/scienceparkdknl.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Science Park</h2>
                          <p>
                            An innovative Science centre was established by the National Council of Science Museums for children, to popularize and create interest in science. Many games which are based on the fundamentals of scientific theory are found here which are thoroughly enjoyed by the children. 
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/neheruparkdknl.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>Jawaharlal Neheru Park</h2>
                          <p>
                            One of the best park in Dhenkanal.It is the place where everyone can go there and get happy to seeing the small  children's are playing with each other. .
                          </p>
                        </div>
                        <div class="col-lg-4" style="margin-top: -100px;">
                          <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="photos/childresparkdknl.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 140*140"></img>
                          <h2>children's Park</h2>
                          <p>
                            children's Park is one of the most popular parks in Dhenkanal . The park have many statue of Dianosers installed right in the heart of it. The park is ideal for childrens.
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