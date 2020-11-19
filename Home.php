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

  <div id="has tag"> 
    <div id="my_body">
      <div id="navigation">
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
             
              <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</i></button>
            </form>
          </div>
        </nav>
     </div>

     <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="photos/Temple-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>JAGANNATH TEMPLE</h5>
              <p>PURI</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="PHOTOS/bg3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>KONARK</h5>
              <p>PURI</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="PHOTOS/bg4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>LINGARAJ TEMPLE</h5>
              <p>BHUBANESWAR</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>     
      <div id="otherbg" class="other bg-dark">
        <nav class="bar navbar-dark bg-primary" style="padding: 10px; font-family:Brush Script MT ;">
          <b>Welcome To Odisha</b>
        </nav>
      <div class="row row-cols-1 row-cols-md-3" style="margin-top:10px;">
        <div class="col mb-4">
          <div class="card">
            <img src="photos/TEMPLE-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Puri(Jagannath Temple)</h5>
              <p class="card-text">The Jagannath Mandira of Puri is an important Hindu temple dedicated to Lord Jagannath, a form of lord Vishnu, located on the eastern coast of India, at Puri in the state of Odisha.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/temple-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bhubaneswar(Lingaraj Temple)</h5>
              <p class="card-text"> Bhubaneswar before becoming the capital of Orissa in 1948 had been a temple town. As a temple town it prospered and thrived, becoming an important Hindu cultural and religious center...it is generally believed that the town probably developed around the Lingaraj temple, erected to commemorate Lord Shiva. Thus the name Bhubaneshwar – the Lord of the Three Worlds: Tribhuvaneshvara.</p>
              <a href="Khordha.php" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/khandagiri.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bhubaneswar(khandagiri Hill)</h5>
              <p class="card-text">History of Khandagiri Caves reveal that they were excavated during the reign of King Kharavela. Constructed primarily as residential blocks for Jain monks, these caves are embellished with carvings of women, elephants and even athletes.</p>
              <a href="Khordha.php" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/seabeach.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Puri(Sea Beach)</h5>
              <p class="card-text">Purisituated on the eastern sea-bed of India, is the only most popular sea-side resort where the beauty of the sky in radiant colours, the roaring waves and the golden beach can be experienced. The long sandy beach draws large numbers of western travellers and Indians. According to Hindu belief, there are five great holy spots (Pancha Tirthas) at Puri out of which sea is the greatest and holiest for tourists and travellers. Puri sea beach is the best in India. But in Puri to take sea bath is a pleasure and enjoyable experience. The beach is very wide and exposed and there's not a scrap of shade to be found.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/Hirakuddam.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sambalpur(Hirakud Dam)</h5>
              <p class="card-text">Hirakud Dam is built across the Mahanadi River, about 15 kilometres (9 mi) from Sambalpur in the state of Odisha in India. Behind the dam extends a lake, Hirakud Reservoir, 55 km (34 mi) long. It is one of the first major multipurpose river valley projects started after India's independence.</p>
              <a href="Sambalpur.php" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/CUTTACK.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cuttuck</h5>
              <p class="card-text">This  is the former capital and the second largest city in the Indian state of Odisha. It is the headquarters of the Cuttack district. The name of the city is an anglicised form of Kataka which literally means The Fort, a reference to the ancient Barabati Fort around which the city initially developed. Cuttack is known as the Millennium City as well as the Silver City due to its history of 1000 years and famous silver filigree works. .</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card" style="width: 70%; margin-left: 15%;">
        <div class="card-body bg-info">
          <h5 class="card-title text-center"><b>ODISHA</b></h5>
          <p class="card-text">Tourism in Odisha is one of the main contributors to the Economy of Odisha, India, with a 500 km (310 mi) long coastline, towering mountains, serene lakes, natural biodiversity and frolicking rivers. Odisha is one of the major tourism sectors of India, with various tourists' attractions, ranging from wildlife reserves, beaches, temples, monuments, the arts and festivals. Other than wildlife reserves, beaches, temples, monuments, the arts and festivals, the Odisha Tourism Development Corporation, a Public Sector Undertaking of Government of Odisha, is also developing tourism sector of Odisha and India.
            Odisha, the eastern coast of Indian state is well-known to world for its alive traditions and culture. Gaining recognition as a pilgrimage destination. Today Odisha becomes one of the key cosmopolitan centers of eastern India. Odisha tour package includes Culture, Art, Craft, Tradition, Festival along with sightseeing let you experience the life of Odisha.
            Odisha Tourism includes wide range of tour packages not only to see and learn new things in Odisha but also enjoy your holidays with these packages. The tour packages include Tribal tour packages, Wildlife tour packages, Golden Triangle tour packages, Dimond tour packages to Buddhist places, Temple tour packages, Honeymoon tour packages, Adventure tour packages, Beach tour packages and many more including customize tour solutions. Please select our day to day Itinerary and book the tour package to explore real charm of this beautiful state Odisha.
          </p>
          <div class="my-2 collapse hide" id="hide" style>

            <h3 class="text-dark text-center text-uppercase mt-3 mb-2 heading">Best Time To Visit</h3>
            <p class="text-justify my-1">Preferrable time for Odisha tourism is the winter season. Mostly the times starts from October - March period - especially November, December and January - when the weather is warm and dry. It gets uncomfortably hot in April - May, and the monsoon generally hits in June and lasts until the end of September. The first couple of months of the rainy season are also sweltering, but this is when Odisha's most famous festival, the Rath Yatra, takes place. If you want to visit the famous car festival then you have to visit Odisha in the month of June and July. So plan accordingly.</p>

            <h3 class="text-dark text-center text-uppercase mt-3 mb-2 heading">How To Reach</h3>
            <h5 class="text-warning">By Air :</h5>
            <p class="text-justify my-1">Odisha has one International Airport which is located in the capital city, Bhubaneshwar(Biju Patnaik International Airport). Regular flights operate to and from the city. This Airport is further connected to the Airports of major cities like New Delhi, Kolkata, Hyderabad, Raipur, Varanasi, Mumbai and Chennai. After landed at Bhubaneswar you can plan your stay either in Bhubaneswar or can travel through your hired cab or by your booked hotel cab services to your destination.</p>

            <h5 class="text-warning">By Rail :</h5>
            <p class="text-justify my-1">Bhubaneswar Railway Station is one of the most convenient and important Railway Stations in Odisha. The train network connects Bhubaneswar to major places of the country including Calcutta, Puri, Chennai, Delhi, Mumbai, Bengaluru, Guwahati, Hyderabad, Tirupati and Trivandrum. There are many more rail heads other than the Bhubaneswar Railway Station. These stations connect Odisha to other towns and places within and outside the state.</p>

            <h5 class="text-warning">By Road :</h5>
            <p class="text-justify my-1">Odisha is connected to a wide network of roads which are further connected to the rest of the country through National Highways and State Highways. This way, Odisha is easily accessible from all major cities of the country like New Delhi, Kolkata, Hyderabad, Raipur, Varanasi, Mumbai and Chennai.</p>
            


           <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">Sl no.</th>
                <th scope="col">District</th>
                <th scope="col">Distance(From Bhubaneswar)</th>
                <th scope="col">By Road(From Bhubaneswar)<br>Source of Travel Available :</th>
                <th scope="col">Book Taxi</th>
                <th scope="col">Find Your Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Khordha</td>
                <td>24 km</td>
                <td class="text-center">Bus<br>Car Taxi(OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/EJoL96rSkaG8hh2KA" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Cuttuck</td>
                <td>26 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/d62djoxgGY6rENvw7" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Puri</td>
                <td>63 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/Zuu9cphFLJMrte776" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Sambalpur</td>
                <td>274 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/mh6Y9hL6NgXewcG67" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Angul</td>
                <td>126 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/uXGqFpaqKD4b2jWZ8" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Baleswar</td>
                <td>196 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/7pT5wKjjk9TetMd18" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Jajpur</td>
                <td>98 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/QBx3RZQzKKR3Gh3a8" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>koraput</td>
                <td>487 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/tJXRmjMtatcKxq7x5" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Bhubaneswar</td>
                <td>0 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/YvXnZ7ykgc9MQWZd9" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Bhadrak</td>
                <td>127 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/hy9sokbF8X1PViur5" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Nayagarh</td>
                <td>84 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/hSanRjMDZ73oCh7Q9" role="button">Location</a></td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>Gajapati</td>
                <td>276 km</td>
                <td class="text-center">Bus<br>Car (OLA,UBER)<br>Auto (OLA,UBER)</td>
                <td><a class="btn btn-primary" href="https://www.olacabs.com/" role="button">Book Your Ride</a></td>
                <td><a class="btn btn-primary" href="https://goo.gl/maps/bDSNPDbRGkJYgiD9A" role="button">Location</a></td>
              </tr>
            </tbody>
          </table>
            <h3 class="text-dark text-center text-uppercase mt-3 mb-2 heading">Culture of Odisha</h3>
            <p class="text-justify my-1">The culture of Odisha derived from various rulers as this land has been ruled by vivid rulers. Every rulers Arts and Crafts are mixed and formed a different culture of Odisha. It is the language and the culture of the Aryans mostly seen in Odisha. These people who made their entry from the North Eastern state have shown a decent cultural background. Present style of the living of the people of Odisha is a result of the racial and cultural amalgamation. The geography of the state contributes to its cultures of the Aryans and Dravidians. The people of Odisha are known for their rich cultural heritage and have an amalgamation of the Jagannath cult, the Vaishnav cult, Buddhism and Sivayat cult. Odia is the offical language mostly spoken here but there are other languages along with tribal languages are also spoken in few parts of the state.</p>
          

            <h3 class="text-dark text-center text-uppercase mt-3 mb-2 heading">Food Of Odisha</h3>
            <p class="text-justify my-1">Odisha has a very rich religious culture that has been reflected in the food as well. Odia cuisine is very simple yet delicious, prepared in little or no oil which not only enhances the taste, but makes them very healthy as well. Here, you will find a mix of vegetarian and non-vegetarian dishes. Again people here loves eating sweets and may be this is the reason they themselves are so lovable. Scroll down below to get a glimpse of the variety of unique, authentic delicacies which can only be found in Odisha. Our best 10 food are:</p>
            
            
            <ol style="margin-left:400px">
              <li class="text-justify my-1">Chenna poda(Milk Cake)</li>
              <li class="text-justify my-1">Podo Pitha(Spiced,Rice & Coconut)</li>
              <li class="text-justify my-1">Dalma</li>
              <li class="text-justify my-1">Pakhala(Water Rice)</li>
              <li class="text-justify my-1">Dahi Vada-Aloo Dum</li>
              <li class="text-justify my-1">Mahaprasad(puri)</li>
              <li class="text-justify my-1">Ghanta</li>
              <li class="text-justify my-1">Mudhi Mansa</li>
              <li class="text-justify my-1">Mati Handi Mansa</li>
              <li class="text-justify my-1">Sea Foods</li>
            </ol>
          </div>

          <div class="text-center" id="showBtn" style="display: block;">
          <div class="text-center" id="showBtn" style="display: block;">
            <button class="btn btn-danger collapsed" type="button" data-toggle="collapse" data-target="#hide" aria-expanded="true" aria-controls="hide">
              Show More
            </button>
          </div>
         </div>

        </div>

      <div>
        <nav class="text-center text-dark bg-warning" style="font-size: x-large; font-weight: 400; "><b>Explore The Land Of Odisha</b></nav>
      </div>
      <div class="card-deck">
        <div class="card bg-dark">
          <img src="photos/Khasada-Waterfall-Odisha.jpg" class="card-img-top" alt="...">
          <a class="text-center" style="font-size: x-large; font-weight: 400;"><b>WaterFalls And Lake</b></a>
          <a href="#" class="btn btn-success">Show More</a>
        </div>
        <div class="card bg-dark">
          <img src="photos/ratha.jpg" class="card-img-top" alt="...">
          <a class="text-center" style="font-size: x-large; font-weight: 400;"><b>Temples And Festivals</b></a>
          <a href="#" class="btn btn-success">Show More</a>
        </div>
        <div class="card bg-dark">
          <img src="photos/Daringbadi-hill-station.jpg" class="card-img-top" alt="...">
          <a class="text-center" style="font-size: x-large; font-weight: 400;"><b>Hill Stations And Natural Beauty</b></a>
          <a href="#" class="btn btn-success">Show More</a>
        </div>
        <div>
        </div>
      </div>


    </div>
    
    <div id="text">
    <nav class="text-center text-light bg-secondary">FAQs - Frequently Asked Questions</nav>
    </div>
    <div id="question">
      <div class="row">
        <div class="col-md-6">
          <div id="accordion" class="my-2">
            <div class="card bg-modal box-shadow">
              <button class="btn btn-warning text-left collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingone">
                Where exactly is Odisha Located ?
              </button>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Odisha is located in the eastern part of the country, it is bounded by the states of Jharkhand and West Bengal to the north and northeast, by the Bay of Bengal to the east, and by the states of Andhra Pradesh and Telangana to the south and Chhattisgarh to the west.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-danger text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="headingTwo">
                What is The Best Time to Visit Odisha ?
              </button>
              <div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Odisha is one of the most beautiful places to visit at any time of the year.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-primary text-left collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="headingThree">
                What can be expected from a odisha trip ?
              </button>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Odisha is an amalgamation of everything! Whether you are looking for Honeymoon, Adventure, Leisure, Beach, Hill Stations, Wild Parks or Water Destinations, you will find all your answers in Odisha.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-secondary text-left collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="headingFour">
                How is the connectivity of Odisha with order corners of India ?
              </button>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Odisha is an important Tourism and Holy destinations of India. Travelers and visitors can reach this beautiful destination from any corner, involving via Road, Railways or Air easily.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-success text-left" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" id="headingFive">
                Does Odisha have international Airports ?
              </button>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Odisha has many Airports but among all Biju Pattnaik International Airport in Bhubaneswar is the most active one.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div id="accordion1" class="my-2">
          <div class="card bg-modal box-shadow">
            <button class="btn btn-dark text-left collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapsesix" id="headingSix">
              Is there any dress code to be followed while on a Odisha trip ?
            </button>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion1" style>
              <div class="card-body bg-info">
                <p class="text-justify">In Odisha there are no such restrictions on clothing for the visitors. Till dressing sense of a visitor does not hurt the sentiment of their local culture and religious beliefs, visitors can dress according to their own preferences.</p>
              </div>
            </div>
          </div>
          <div class="card bg-modal box-shadow">
            <button class="btn btn-secondary text-left collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" id="headingSeven">
              Is visa required to visit Odisha ?
            </button>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion1" style>
              <div class="card-body bg-info">
                <p class="text-justify">Indians certainly don't require any Visa or Passport to visit Odisha. However, both are mandatory for International tourists.</p>
              </div>
            </div>
          </div>
          <div class="card bg-modal box-shadow">
            <button class="btn btn-warning text-left collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" id="headingEight">
              What are the tourist activities in Odisha ?
            </button>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion1" style>
              <div class="card-body bg-info">
                <p class="text-justify">Odisha has many choices for Travelers and Tourists in terms of activities in which they can engage in. To list down a few, there are Water Sports activities, Wildlife Safaris, Trekking, Beach activities, Tribal Village Tours, Cultural Tours, Hiking, Beach Festivals, Religious Tours, Romantic Tours etc.</p>
              </div>
            </div>
          </div>
          <div class="card bg-modal box-shadow">
            <button class="btn btn-danger text-left collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" id="headingNine">
              Are the boating safe? What can be expected from them  ?
            </button>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion1" style>
              <div class="card-body bg-info">
                <p class="text-justify">The boats are built in a way, visitors should not feel short for any amenities and facilities while enjoying boating in some places of Odisha.</p>
              </div>
            </div>
          </div>
          <div class="card bg-modal box-shadow">
            <button class="btn btn-primary text-left collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen" id="headingTen">
              What is the currency exchange rate in Odisha ?
            </button>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion1" style>
              <div class="card-body bg-info">
                <p class="text-justify">Odisha is one of the most important parts of India. It follows the FOREX rate as decided by the Government of India.</p>
              </div>
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
  </div>
    </body>
</html>