 <?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
      <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
      <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>

      <style>
     
  /* style.css */
           *{
               font-family: 'Cormorant Infant', serif;
               margin: 0;
               padding: 0;
               scroll-padding-top: 1rem;
               scroll-behavior: smooth;
               list-style: none;
               text-decoration: none;
               box-sizing: border-box;
          }
          :root{
               --main-color: #408f34 ;
               --text-color: #0c0c0c;
               --bg-color: #fff;
               --other-color: #777;
          }

          scroll bar 
           html::-webkit-scrollbar{
               width: 0.5rem;
               background: transparent;
          }
          html::-webkit-scrollbar-thumb{
               border-radius: 5rem;
               background: var(--main-color);
          }

          section{
               padding: 4rem 0 0;
          }
          body{
               color: var(--text-color);
               background: white;
          }
         
          .container{
               max-width: 1068px;
               margin-left: auto;
               margin-right: auto;
          }
          header{
          width: 100%;
          position: fixed;
          height:75px;
          display: block;
          top: 0; left: 0;
          background:#269815;
          z-index: 100;
          }
          header.shadow{
          background: var(--bg-color);
          box-shadow: 2px 4px 4px rgb(15 54 55 / 20%);
          transition: .4s ease ;
          }
          header.shadow #search-icon{
          color: var(--text-color);
          }
          .nav{
          display: flex;
          align-items: center;
          justify-content: space-between;
          margin-right:10px;
          }
          
          #menu-icon{
          font-size: 25px;
          color: var(--text-color);
          cursor: pointer;
          display: none;
          }
          .logo{
               font-size: 1.5rem;
               font-weight: 500;
               color: black;
          }
          
          .logo:hover{
               color:rgb(6, 23, 5);
          }
          .navbar{
               
          display: flex;
          column-gap: 1.5rem;
          margin:10px;
          padding:2px;
          }
          .navbar a{
          color:black;
          font-size: 1.1rem;
          text-transform: uppercase;
          font-weight: 500;
          }
          .navbar a:hover,
          .navbar .active{
               color: black;
               border-bottom: 2px solid var(--main-color);
          }
          #search-icon{
               font-size: 20px;
               cursor: pointer;
               color:black;
          }
          footer{
               background-color:#269815;
          }
          .search-box{
               position: absolute;
               top: 110%; right: 0; left: 0;
               background: 4px 4px 10px rgba(5, 120, 24, 0.52);
               box-shadow: 1px 3px 15px var(--main-color);
               border: none;
               border-radius: 10px;
               clip-path: circle(0% at 10% 0%);
          }
          .search-box.active{
               clip-path: circle(200% at 100% 0%);
               transition: 1s;
          }
          .search-box input{
               width: 100%;
               padding: 20px;
               border: none; outline: none;
               background: transparent;
               font-size: 1rem;
               background: var(--bg-color);
               border-radius: 10px;
          }
          @media (max-width: 1000px){
          .container{
               margin-left: 1rem;
               margin-right: 1rem;
          }
          }
          @media (max-width: 991px){
          .nav{
               padding: 15px 20px;
          }
          section{
               padding: 3rem 0 1rem;
          }
          }
          @media (max-width: 920px){
          #search-icon{
               color: var(--text-color);
          }
          }

          @media (max-width: 768px){
          .search-box input{
               padding: 15px;
          }
          .logo{
               margin-right:5px;
          }
          .nav{
               padding: 10px 0;
          }
          #menu-icon{
               display: initial;
          }
          .navbar{
               position: absolute;
               top: 100%;
               right: 0;
               left: 0;
               display: flex;
               flex-direction: column;
               row-gap: 0.5rem;
               text-align: center;
               box-shadow: 4px 4px 20px rgb(15 54 55 / 200%);
               background-color: var(--bg-color);
               clip-path: circle(0% at 0% 0%);
               transition: .6s;
          }
          .navbar a{
               display: block;
               padding: 15px;
          }
          .navbar a:hover,
          .navbar .active{
               border-bottom: none;
               background: var(--main-color);
               color: var(--bg-color);
          }
          .active{
               clip-path: circle(144% at 0% 0%);
          }
          }         
      </style>

 </head>

 <body style="background-color: #eee;">
<!-- <section> -->
 <header>
        <!-- navigation -->
        <div class="nav  container">
            <i class="fas fa-bars" id="menu-icon"></i>
            <a href="#" class="logo">Digital<b>Agri</b>Market</a>
            <ul class="navbar">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#features">Features</a></li>      
                <li><div class="dropdown p-2 settings ">
                          <button class="btn  dropdown-toggle text-black" style="margin-top:-4px;font-size:20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Settings
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='MyProducts.php' class='dropdown-item' style='padding-right:-20px;'>My products</a>";
                                        echo "<a href='transaction.php' class='dropdown-item' style='padding-right:-20px;'>Transactions</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
                     </div>
               </li>
            </ul>
            <!-- <i class="fas fa-search" id="search-icon"></i>
            <div class="search-box container">
                <input type="search" name="" id="" placeholder="Search here...">
            </div> -->
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <div class="proicon">

                          <?php
                              if (!isset($_SESSION['phonenumber'])) {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                              }
                              ?>
                     </div>               
    </header>
<!-- </section> -->
   <section id="home">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="../Images/Homepage/vegetables.jpg" alt="First slide">
      
    </div>
    <div class="carousel-item">
               <img class="d-block w-100" src="../auth/bg4.jpg" alt="Second slide">
               
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

           <br><br>
           <div class="features container" id="features">
                <h1 style="font-weight: bold;color:black; text-align:center"> Features</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/user.png" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">User-Friendly Product Updates</h4>
                               <br>
                               <h5 class="card-text"> A simple and accessible way for farmers to keep their product listings up to date and accurate.</h5>
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/hand.png" alt="Card image cap" width="200px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Buyer Connection</h4>
                               <br>
                               <h5 class="card-text">Direct connection with the buyer to satify their needs</h5>
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/Homepage/far.png" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Farmer Group Formation</h4>
                               <br>
                               <h5 class="card-text">Touch with other farmers to make your own community where you can ask for help</h5>
                          </div>
                     </div>
                </div>
           </div>
           </div>
          <br>
         
<!-- Footer -->
<footer class=" text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ee46ca;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
       </section>
    <div class="mb-4">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
               <p><u><a class="text-white" href="https://www.DigitalAgriMarket.com/">Digital AgriMarket Corporation</a></u> is a Online platform to purchase a organic farming products.</p>
            </div>
     </div>
   
     </div>
   
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://DigitalAgriMarket.com/">Digital AgriMarket.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

      </body>

 </html>