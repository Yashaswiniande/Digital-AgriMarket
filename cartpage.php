<?php
include("../Functions/functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
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

<body>
<section>
<header id="search-icon">
        <!-- navigation -->
        <div class="nav  container">
            <i class="fas fa-bars" id="menu-icon"></i>
            <a href="#" class="logo" style="font-size:20px;">Digital<b>Agri</b>Market</a>
            <!-- <i class="fas fa-search" id="search-icon"></i>

            <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:300px;">
                </form> -->
            <!-- navigation list -->
            <ul class="navbar">
                <li><a href="bhome.php" class="active">Home</a></li>   
                <li>
                    <div class="p-1">
                        <div class="dropdown" style="font-size:5px;">
                            <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                FRUITS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                getFruits();
                                ?>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                    <div class="p-1">
                        <div class="dropdown">
                            <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VEGETABLES
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                getVegetables();
                                ?>
                            </div>
                        </div>
                    </div>
               </li>
               <li>
                <!-- <div class="p-2 cart"> -->
                    <div class="icon2">
                        <a href="cartpage.php"> <i class="fa" style="font-size:30px; color:black;">&#61562;</i></a>
                        <span id="icon" style="color:black"> <?php echo totalItems(); ?> </span>
                    </div>
                    <!-- </div>    -->
               
                </li>
                <li>

                    <div >
                        <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='logout.php' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/BuyerLogin.php'> <div  style='padding-right:-20px;'>Login</div></a>";
                                   }
                        ?>
                    </div>
                  </li>

            </ul>
            
        </div>
       
    </header>
 </section>

<section>
<form action="checkout.php" method="post">
        <?php
        $phonenumber = $_SESSION['phonenumber'];
        $get_addr = "select buyer_addr from buyerregistration where buyer_phone=$phonenumber";
        $run = mysqli_query($con, $get_addr);
        while ($row = mysqli_fetch_array($run)) {
            $buyer_addr = $row['buyer_addr'];
        }
        ?>

        <div class="container mt-2">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Check your address </h3>
            </div>
            <hr style="margin-top:-0.5%">
            <div class="form-group row">          
                <div class=" col-md-6 input-group mt-2 hey ">
                        <label class="input-group-text" style="background-color:green;color:black">Delivery Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $buyer_addr; ?> ">
                </div>
             </div>
        </div>
               
    <div class="container">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            $temp = totalItems();
            echo   "<div class='text-left'>
                        <h3>Your Items :- $temp</h3>
                        <hr>";
        }
        ?>

        <table class="table">
            <thead>
                <th>S.No</th>
                <th>Item Name</th>
                <th>Total</th>
                <th>Delete</th>
            </thead>

            <?php
            $total = 0;
            global $con;
            if (isset($_SESSION['phonenumber'])) {
                $sess_phone_number = $_SESSION['phonenumber'];
                $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                $run_price = mysqli_query($con, $sel_price);

                $qtycart = array();
                $i = 0;
                while ($p_price = mysqli_fetch_array($run_price)) {
                    $product_id = $p_price['product_id'];
                    $_SESSION['qtycart'][$i] = $p_price['qty'];

                    $pro_price = "select * from products where product_id='$product_id'";
                    $run_pro_price = mysqli_query($con, $pro_price);
                    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                        $product_title = $pp_price['product_title'];
                        $product_price = $pp_price['product_price'];
                        $subtotal = $_SESSION['qtycart'][$i] * $product_price;

            ?>
                        <tbody>
                            <tr>
                                <td data-label="S.No" style="font-size:20px;"><?php echo $i + 1; ?></td>
                                <td data-label="Item Name " style="font-size:20px;"><?php echo $product_title; ?></td>

                               
                                <?php $subtotal = $_SESSION['qtycart'][$i] * $product_price; ?>
                                <?php
                                $subquery = "update cart set subtotal = $subtotal where product_id = $product_id";
                                $run = mysqli_query($con, $subquery);
                                ?>

                                <td data-label="Subtotal" style="font-size:20px;"><?php echo $subtotal; ?></td>
                                <?php $total = $total + $subtotal ?>
                                <td data-label="Delete" style="font-size:20px;"><a href="DeleteProductCart.php?id=<?php echo $product_id; ?>" id="Deletionlink"><i class="far fa-times-circle"></i></a></td>
                            </tr>
                <?php
                    }
                    $i++;
                }
            } else {
                echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
            } ?>

                        </tbody>
        </table>

    </div>

    </div>
        </from>
        </section>

<section>
    <div class="container">
    <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left m-2">
            <a href="Transaction.php">
                <button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">My Orders</button>
            </a>
        </div>
        <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left  emptycart m-2">
            <a href="emptyCart.php">
                <button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">Empty Cart</button>
            </a>
        </div>
       
        <div class=" float-none float-sm-none float-md-none float-lg-left float-xl-left continueshopping m-2">
            <a href="bhome.php">
                <button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">Continue Shopping</button>
            </a>
        </div>
        <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 border border-dark  " style="border-radius:5%;">
            <h3>Grand total = Rs <?php echo $total; ?> 
        <?php $_SESSION['grandtotal'] = $total; ?>
        </div>
      <br>

        
        
   <br>
   <br>
   <br><br><br>

            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Select Payment Option</h3>
            </div>
            <hr style="margin-top:-0.5%">
            <div class="payment">
                <h4>
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="paytm" required>
                   <span>paytm</sapn>
                   <br>
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="cod" required>
                    <span>cash on delivery</sapn>
                </h4>
            </div>

            <div class="float-none float-sm-none float-md-none float-lg-right float-xl-right ">
             <button type="submit" name="submit" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">
                        Place Order
        </button>
            </div>  
           
             
    
    <br> <br> <br> <br> <br> <br>
        </section> 

     <!-- footer -->
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
               <p><u><a class="text-white" href="https://www.DigitalAgriMarket.com/">Digital AgriMarket Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
            </div>
     </div>
   
     </div>
   
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://DigitalAgriMarket.com/">Digital AgriMarket.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    
    $address = $_POST['address'];

    $payment = $_POST['payment'];
    //$total = $_SESSION['grandtotal'];

    $count = 0;
    while ($count < $i) {
        $product_id = $allproducts[$count];
        $qty = $allqty[$count];
        $total = $allsubtotal[$count];
        $phone = $allphones[$count];
        $query1 = "insert into orders (product_id,qty,address,phonenumber,total,payment) values ('$product_id','$qty','$address','$sess_phone_number','$total','$payment')";
        $run = mysqli_query($con, $query1);
        $count = $count + 1;
    }
    $clear = "delete from cart where phonenumber = $sess_phone_number";
    $run = mysqli_query($con, $clear);
    if ($run) {
        echo "<script>alert('Product placed successfully');</script>";

    }
}
?>