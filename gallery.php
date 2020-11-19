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


  <div id="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
     <a class="navbar-brand" href="http://localhost/php/project/home.php"><img src="photos/logo.png" width="130px"class="d-inline-block align-top" alt="" loading="lazy"></a>

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
         
          <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</i></button>
        </form>
      </div>
    </nav>
 </div>

    <div class="card-deck">
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/water fall koraput 3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Deomali Waterfall</h5>
                      <p>koraput</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/Sabara_Shri_Khetra.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Sabara shri khetra </h5>
                      <p>Koraput</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/gupteswar koraput 4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Gupteswar Temple</h5>
                      <p>Koraput</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">KORAPUT</h5>
                <p class="card-text">Koraput is a Tourism Place. The town is surrounded by mountains, thick forests and waterfalls. This town also has many old temples.</p>
                <a href="https://goo.gl/maps/L8qSNFfAE1v96hvz8" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/khirachora gopinath baleswar.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Khirachora Gopinatha Temple</h5>
                      <p>Baleswar</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/panchalingeswar.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Pancha Lingeswar</h5>
                      <p>Baleswar</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/chandipur seabeach.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Chandipur Beach</h5>
                      <p>Baleswar</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/imami jagannath.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Imammi Jagannath Temple</h5>
                      <p>Baleswar</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Baleswar</h5>
                <p class="card-text">Balasore or Baleshwar is a city in the state of Odisha,about 194 kilometres north of the state capital Bhubaneswar and 152 kilometres (94 mi) from Kolkata, in eastern India. It is the largest city of northern Odisha and the administrative headquarters of Balasore district. It is best known for Chandipur beach.</p>
                <a href="https://goo.gl/maps/3rLHVUcfxcWoj2ax9" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/jagannath-temple-puri.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Jagannath Temple</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/konark-tmpl.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Konark</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/puri seabeach.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Puri Seabeach</h5>
                      <p>Puri</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Puri</h5>
                <p class="card-text">Puri is a city and a municipality in the state of Odisha in eastern India. It is the district headquarters of Puri district and is situated on the Bay of Bengal, 60 kilometres south of the state capital of Bhubaneswar.</p>
                <a href="https://goo.gl/maps/F2hGs5ZcFwzAPNyc7" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/Sri_raghunath_jew_temple_-_4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Raghunath Jew Temple</h5>
                      <p>Nayagarh</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/buddha khola.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Buddha khola </h5>
                      <p>Nayagarh</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/Nilamadhav_Temple.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nila Madhaba</h5>
                      <p>Nayagarh</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Nayagarh</h5>
                <p class="card-text">Nayagarh is a town and a municipality in Nayagarh district in the Indian state of Odisha. It is the headquarters of Nayagarh district.</p>
                <a href="https://goo.gl/maps/1b6sbaYjX2EcnuTa7" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>

    </div>
    <div class="card-deck">
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/barabati.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Barabati Stadium</h5>
                      <p>Cuttuck</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/dhabaleswar.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Hanging Bridge </h5>
                      <p>Cuttuck</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/baliyatra.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Baliyatra</h5>
                      <p>Cuttuck</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Cuttuck</h5>
                <p class="card-text">Cuttack is a city in the eastern Indian state of Odisha. It's on a peninsula flanked by the Mahanadi River to the north and the Kathajodi River to the south. The ruins of moated Barabati Fort, once home to the Eastern Ganga dynasty, show the city’s medieval significance. Within the fort's walls lies the Shahi Mosque, with its 3 white domes. Nearby, Maa Cuttack Chandi Temple is a pilgrimage site for Hindu devotees.</p>
                <a href="https://goo.gl/maps/bWSkYGri2Vi7UtpR7" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/phulbani-roadtrip.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Natural Beauty</h5>
                      <p>phulbani</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/Putudi Waterfalls.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Waterfall </h5>
                      <p>phulbani</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/1422016961Dark-Hollow-Falls.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Waterfall</h5>
                      <p>phulbani</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">phulbani</h5>
                <p class="card-text">Phulbani once associated with its virgin forests and peaceful tribal people.Major landmarks in Phulbani are Lord Jagannath Temple, Madikunda Chaka, Govt. College, FCI, Stadium.</p>
                <a href="https://goo.gl/maps/rTibo7RxEJCDU5H5A" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/daringbadi-5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Natural Beauty</h5>
                      <p>Kandhamala</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/daringbadi-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Kashmir of Odisha </h5>
                      <p>Kandhamala</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Kandhamala</h5>
                <p class="card-text">Kandhamal district is a district in the state of Odisha, India. The district headquarters of the district is Phulbani. Kandhamal is famous for its local turmeric renowned as 'Kandhamal Haldi' .</p>
                <a href="https://goo.gl/maps/5iGwkyDg1BwfM2XE8" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/similipal.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Similipal National Park</h5>
                      <p>Mayurbhanj</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/palace mayurbhanj.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Odisha's Palace </h5>
                      <p>Mayurbhanj</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/sitakund.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Sitakund Waterfall</h5>
                      <p>Mayurbhanj</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/kichakeswar.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Kichakeswar Temple</h5>
                      <p>Mayurbhanj</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Mayurbhanj</h5>
                <p class="card-text">Mayurbhanj district is one of the 30 districts in Odisha state in eastern India. Mayurbhanj district is the largest district of Odisha by area. Baripada city is its headquarter. Other major towns are Rairangpur, Karanjia and Udala. As of 2011, it is the third-most-populous district of Odisha, after Ganjam and Cuttack.</p>
                <a href="https://goo.gl/maps/6mGg6ybZPykcAMEC7" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>

    </div>
    <div class="card-deck">
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                  
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/Rath-yatra_20190715_571_855.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ratha Yatra</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/sunabesha-balabhadra ji.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Suna Besha</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/sunabesha-subhadra ma.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Suna Besha</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/sunabesha-jagannath ji.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Suna Besha</h5>
                      <p>Puri</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/sunabesha.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Suna Besha</h5>
                      <p>Puri</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Ratha Yatra</h5>
                <p class="card-text">Ratha Yatra is a Hindu festival associated with Lord Jagannath held at Puri in the state of Odisha, India. It is the oldest Ratha Yatra taking place in India and the World, whose descriptions can be found in Brahma Purana, Padma Purana, and Skanda Purana and Kapila Samhita.</p>
                <a href="https://goo.gl/maps/92XA45Ger3EbnF8x7" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/Durga-puja-pandal.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Vijaya Dasami</h5>
                      <p>Bhubaneswar</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/dargha-bazaar-cuttack-medha.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Dargha Bazar</h5>
                      <p>Cuttuck</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/choudhary-bazar-cuttack.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Choudhury Bazar</h5>
                      <p>Cuttuck</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Durga Puja</h5>
                <p class="card-text">Durga Puja, also called Durgotsava, is an annual Hindu festival originating in the Indian subcontinent which reveres and pays homage to the Hindu goddess.</p>
                <a href="#" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/ganeshpuja.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ganesh Puja</h5>
                      <p>Odisha</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/Ganesh Puja.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ganesh Puja </h5>
                      <p>Odisha</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Ganesh Puja</h5>
                <p class="card-text">Ganesh Chaturthi, also known as Vinayaka Chaturthi, is a Hindu festival celebrating the arrival of Ganesh to earth from Kailash Parvat with his mother Goddess Parvati/Gauri. The festival is marked with the installation of Ganesh clay idols privately in homes, or publicly on elaborate pandals.</p>
                <a href="#" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/gaja laxmi puja.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Laxmi Puja</h5>
                      <p>Odisha</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="photos/diwali.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Diwali </h5>
                      <p>Odisha</p>
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
           <div class="card-body text-center border-primary mb-3">
               <div class="card-body text-primary ">
                <h5 class="card-title">Laxmi Puja and Diwali</h5>
                <p class="card-text">Lakshmi Pooja is a Hindu religious festival that falls on Amavasya (new moon day) of Krishna Paksha (dark fortnight) in the Vikram Samvat Hindu calendar month of Ashwin, on the third day of Deepawali and is considered as the main festive day of Deepawali.</p>
                <a href="#" class="btn btn-primary">Go to Location</a>
               </div>
           </div>
        </div>

    </div>


  <div id="has tag">
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