<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Transaction</title>
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
   
   footer{
                  background-color:#269815;
             }
             .images:hover {

height: 220px;
box-shadow: 5px 5px 10px grey;
transition: 0.3s;
}

.row {
display: -ms-flexbox;
/* IE10 */
display: flex;
-ms-flex-wrap: wrap;
/* IE10 */
flex-wrap: wrap;
padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
-ms-flex: 25%;
/* IE10 */
flex: 25%;
max-width: 25%;
padding: 0 4px;
}

.column img {
margin-top: 8px;
vertical-align: middle;
width: 100%;
}

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
 /* padding: 10px 10px; */
 margin-right:10px;
 }
 /* .float-left{
      margin-right:auto;
      margin-top:auto;
 } */
 
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
      font-size: 15px;
      cursor: pointer;
      color:black;
 }
 footer{
      background-color:#269815;
 }
 .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 10px 10px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }

    .table th {
        background-color: green;
        color: black;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
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
      width: 50%;
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

<section>
 <header>
        <!-- navigation -->
        <div class="nav  container">
            <i class="fas fa-bars" id="menu-icon"></i>
            <a href="#" class="logo">Digital<b>Agri</b>Market</a>
            <ul class="navbar">
                <li><a href="farmerHomepage.php" class="active">Home</a></li>
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
                            </section>
    <section >
          

          <div style="display:block;box-sizing: border-box;" >
               <div class="content_item ml-5 p-2" ><label style="font-size :30px;">My Transactions</label></div>
               <hr style="margin-top:-0.5%">
          </div>
          <div class="container">
               <table class="table">
                    <thead>
                         <th>S.No</th>
                         <th>Product Name</th>
                         <th>Name</th>
                         <th>Phone Number</th>
                         <th>Delivery Address</th>
                         <th>payment</th>
                         <th>Amount</th>
                    </thead>
                    <tbody>
                         <?php
                         global $con;
                         if (isset($_SESSION['phonenumber'])) {
                              $sess_phone_number = $_SESSION['phonenumber'];
                              $sel_price = "select * from orders where fno = '$sess_phone_number'";
                              $run_price = mysqli_query($con, $sel_price);
                              $i = 0;

                              while ($p_price = mysqli_fetch_array($run_price)) {
                                   $product_id = $p_price['product_id'];
                                   $qty = $p_price['qty'];
                                   $total = $p_price['total'];
                                   $address = $p_price['address'];
                                   $payment = $p_price['payment'];
                                   $phone = $p_price['bno'];


                                   $pro_price = "select * from products where product_id='$product_id'";
                                   $run_pro_price = mysqli_query($con, $pro_price);
                                   while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                                        $product_name = $pp_price['product_title'];


                                        $query_name = "select * from buyerregistration where buyer_phone = $phone";
                                        $run_query_name = mysqli_query($con, $query_name);
                                        while ($names = mysqli_fetch_array($run_query_name)) {
                                             $buyer_name = $names['buyer_name'];


                         ?>
                                             <tr>
                                                  <td data-label="S.No" style="font-size:20px;"><?php echo $i + 1; ?></td>
                                                  <td data-label="Product Name"><?php echo $product_name; ?></td>
                                                  <td data-label="Name"><?php echo $buyer_name; ?></td>
                                                  <td data-label="Phone Number"><?php echo $phone; ?></td>
                                                  <td data-label="Address"><?php echo $address; ?></td>
                                                  <td data-label="Payment"><?php echo $payment; ?></td>
                                                  <td data-label="Price"><?php echo $total; ?></td>
                                             </tr>


                    </tbody>
<?php
                                        }
                                   }
                                   $i++;
                              }
                         } else {
                              echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                         } ?>
               </table>
          </div> <br> <br>





                        </section>

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