<?php
include("../Functions/functions.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>

    
        <?php
        $phonenumber = $_SESSION['phonenumber'];
        $get_addr = "select buyer_addr from buyerregistration where buyer_phone=$phonenumber";
        $run = mysqli_query($con, $get_addr);
        while ($row = mysqli_fetch_array($run)) {
            $buyer_addr = $row['buyer_addr'];
        }
        

                global $con;
                if (isset($_SESSION['phonenumber'])) {
                    $sess_phone_number = $_SESSION['phonenumber'];
                    $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                    $run_price = mysqli_query($con, $sel_price);
                    $i = 0;

                    $allproducts = array();
                    $allqty = array();
                    $allsubtotal = array();
                    $allphones = array();
                    while ($p_price = mysqli_fetch_array($run_price)) {
                        $product_id = $p_price['product_id'];
                        $qty = $p_price['qty'];
                        $subtotal = $p_price['subtotal'];
                        array_push($allproducts, $product_id);
                        array_push($allqty, $qty);

                        $pro_price = "select * from products where product_id='$product_id'";
                        $run_pro_price = mysqli_query($con, $pro_price);
                        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                            $product_title = $pp_price['product_title'];
                            $farmer_fk = $pp_price['farmer_fk'];

                            $get_phone = "select * from farmerregistration where farmer_id = $farmer_fk";
                            $run_get_phone = mysqli_query($con, $get_phone);
                            while ($phones = mysqli_fetch_array($run_get_phone)) {
                                $phone = $phones['farmer_phone'];
                                array_push($allphones, $phone); 
                                 array_push($allsubtotal, $subtotal);
                            }
                        }
                        $i++;
                    }
                } else {
                    echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                } ?>
              
<?php
    if (isset($_SESSION['phonenumber'])) {
                    $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                    $run_price = mysqli_query($con, $sel_price);
                    $count = mysqli_num_rows($run_price);
                    if (isset($_POST['submit'])) {
                        if ($count==0) {
                            echo"
                            <div class='vh-100 d-flex justify-content-center align-items-center'>
                                <div class='col-md-4'>
                                 <div class='border border-3 border-success'></div>
                                     <div class='card  bg-white shadow p-5'>
                                    <div class='mb-4 text-center'>
                            <div class='card-body'>
                                <p class='card-text'>Your cart is empty. </p>
                                <a href='bhome.php' class='btn btn-outline-success'>Home</a>
                            </div></div></div></div></div></div>";
                            
                           
                         }
                      else{
                        echo "<a hrtef='cartpage.php'>";
                         
                        
    $address = $_POST['address'];
   // $delivery = $_POST['delivery'];
    $payment = $_POST['payment'];
    $total = $_SESSION['grandtotal'];

    $count = 0;
    while ($count < $i) {
        $product_id = $allproducts[$count];
        $qty = $allqty[$count];
        $total = $allsubtotal[$count];
        $phone = $allphones[$count];
        $query1 = "insert into orders (product_id,qty,address,fno,total,payment,bno) values ('$product_id','$qty','$address','$phone','$total','$payment','$sess_phone_number')";
        $run = mysqli_query($con, $query1);
        $count = $count + 1;
    }
    $clear = "delete from cart where phonenumber = $sess_phone_number";
    $run = mysqli_query($con, $clear);
    if ($run) {
        echo "<script>alert('Product placed successfully');</script>";
    }
?>

        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="border border-3 border-success"></div>
                <div class="card  bg-white shadow p-5">
                    <div class="mb-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                            fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <h1>Thank You !</h1>
                        <p>Grateful for your recent purchase! Your ongoing support fuels our passion for quality products. Keep shopping with us, and let's continue this journey together.</p>
                        <a href="bhome.php"><button class="btn btn-outline-success">Back Home</button></a>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>
<?php   }
  }
}
?>