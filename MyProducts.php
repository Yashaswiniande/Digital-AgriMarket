<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Products</title>
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
      
        .products {
               margin-left: 9%;
               /* margin-bottom:20px; */

          }
          
          .content_item {
			   text-align: center;
			   justify-content: center;
                  margin-right:10px;
		  }

          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }
          /* .productbox:hover {
               float: left;
              margin:1px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
			  

		  } */
           

          .productbox img {
               height: 200px;
               width: 250px;
               margin-left:5px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p {
               text-align: center;
               /* text-decoration: underline; */
          }

          .productbox img:hover {
               height: 200px;
               width: 250px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p:hover {
               text-align: center;
               text-decoration: underline;

          } 
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
           section{
                    padding: 4rem 0 0;
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
          /* padding: 10px 10px; */
          margin-right:10px;
          }
          
          
          #menu-icon{
          font-size: 25px;
          color: var(--text-color);
          cursor: pointer;
          display: none;
          }
          .content{
               margin:10px;
               padding:10px;
          }
          .logo{
               font-size: 1.5rem;
               font-weight: 500;
               color: black;
          }
          hr {
			   border: 0;
			   height:0.5px;
			   clear:both;
			   display: block;
			   width: 99%;
			   background-color:black;
			   margin-left: 0.5em; 
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
          
          .foot{
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
               /* padding: 15px 20px; */
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
          .nav{
               /* padding: 10px 0; */
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

<body>
<section class="head">
 <header>
        <!-- navigation -->
        <div class="nav  container">
            <i class="fas fa-bars" id="menu-icon"></i>
                     <!-- <a class="float-left " href="farmerHomepage.php" >
                   <img src="../Images/Website/dlogo.png" class="float-left" alt="Logo" style="height:70px;">
                     </a> -->
            <a href="#" class="logo">Digital<b>Agri</b>Market</a>
            
            <!-- navigation list -->
            <ul class="navbar">
                <li><a href="farmerHomepage.php" class="active">Home</a></li>
                
                <li><div class="dropdown p-2 settings ">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
                     </div>
               </li>
            </ul>
           
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
</section class="content">

        <section style="box-sizing: border-box;">


          <div class=content_item>
               <label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>All Products</b></label>
               <?php
               include("../Includes/db.php");
               if (isset($_SESSION['phonenumber'])) {

                    echo "<a href='InsertProduct.php'>
                    <button class='btn btn-warning  font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               } else {
                    echo "<a href='../auth/FarmerLogin.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               }
               ?>

          </div>

          <br>
          <main>
               <div class="products">
                    <?php
                    include("../Includes/db.php");
                    if (isset($_SESSION['phonenumber'])) {
                         $sess_phone_number = $_SESSION['phonenumber'];
                         getFarmerProducts();
                    } else {
                         echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
                    }
                    ?>
               </div>
               <br> <br>
               <hr>
          </main>
     </section>
     <br>
     

   <section class="foot">       <!-- Footer -->
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
               </section>
     </body>
     <script >
          /* js page */
let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () => {
    search.classList.toggle('active');
    menu.classList.remove('active');
}

let menu = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () => {
    menu.classList.toggle('active');
    search.classList.remove('active');
}

//hide menu and search on scroll
window.onscroll = () => {
    menu.classList.remove('active')
    search.classList.remove('active')
}

//header
let header = document.querySelector('header');

window.addEventListener('scroll' , () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});
          </script>
</html>

