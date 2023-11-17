 <?php

    session_start();

    include("../Includes/db.php");

    function getUsername()
    {
        if (isset($_SESSION['phonenumber'])) {
            $phonenumber = $_SESSION['phonenumber'];
            global $con;
            $query = "select * from buyerregistration where buyer_phone = $phonenumber";
            $run_query = mysqli_query($con, $query);
            if ($run_query) {
                while ($row_cat = mysqli_fetch_array($run_query)) {
                    $buyer_name = $row_cat['buyer_name'];
                    $buyer_name = 'Hello ,' . $buyer_name;
                }
                echo @"<div class='text-success  logins mx-1 ml-5  '>$buyer_name</div>";
            }
        } else {
            echo "<a href = '../auth/BuyerLogin.php'><div class='text-success logins mx-5'>Login</div></a>";
        }
    }


   
    function CheckoutIdentify()
    {
        if (isset($_SESSION['phonenumber'])) {
            echo "<script>window.open('CartPage.php','_self')</script>";
        } else {
            echo "<script>window.open('../auth/BuyerLogin.php','_self')</script>";
        }
    }
    function DeleteProductCart()
    {
        $sess_phone_number = $_SESSION['phonenumber'];
        if (isset($_GET['id'])) {
            $product_id = $_GET['id'];
            $delete_product = "delete from cart where  product_id = '$product_id' and phonenumber = '$sess_phone_number'";
            $run_delete = mysqli_query($con, $delete_product);

            echo "<script>window.open('CartPage.php','_self')</script>";
}
    }


    function getCrops()
    {

        global $con;

        $query = "select * from products where product_cat = 1 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];
            echo "<a class='dropdown-item' href='../BuyerPortal/Categories.php?type=$product_type'>$product_type</a>";
        }
    }

    function getFruits()
    {

        global $con;

        $query = "select * from products where product_cat = 2 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_title = $row_cat['product_title'];
            echo "<a class='dropdown-item' href='../BuyerPortal/Categories.php?type=$product_title'>$product_title</a>";
        }
    }

    function getVegetables()
    {

        global $con;

        $query = "select * from products where product_cat = 1 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_title = $row_cat['product_title'];
            echo "<a class='dropdown-item' href='../BuyerPortal/Categories.php?type=$product_title'>$product_title</a>";
        }
    }


    function getProducts()
    {
        global $con;
        $query = "select * from products  order by RAND() LIMIT 0,6";
        $run_query = mysqli_query($con, $query);
        echo "<br>";
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_desc = $rows['product_desc'];
            $product_price = $rows['product_price'];
            $farmer_fk = $rows['farmer_fk'];
           


            echo "
                    <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4 mb-5'>
                <div class='card pb-1 pl-1 pr-1 pt-0 mt-2  bg-white shadow border border-1 border-success' style='height:542px'>
                    <br>
                    
                    <a href='#'>
                        <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                    </a>
                    <div class='card-body  pb-0 '>
                        <div class='row'>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-5 mr-5'>
                                <div class='input-group mb'>
                                    <div class='input-group-prepend'>
                                        <h5 class='card-title font-weight-bold ml-5'>$product_title</h5>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        <div class='row '>
                        <p class='card-text mb-2 font-weight-bold'>Price:- $product_price Rs/kg</p>
                        </div>
                        <div class='row '>
                        <p class='card-text mb-2 font-weight-bold'>Description:- $product_desc </p>
                        </div>
                        <div class='row'>
                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                                <a href='../BuyerPortal/Categories.php?add_cart=$product_id' name='add_cart' class='btn btn-warning border-secondary mr-1  ' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           ";
        }
    }



    function getVegetablesHomepage()
    {
        global $con;
        $query = "select * from products where product_cat = 1 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con, $query);
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_desc = $rows['product_desc'];
            $product_price = $rows['product_price'];
            $product_cat = $rows['product_cat'];

            // echo "  <div class='veg'>
            //             <a href='../BuyerPortal/BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' height='250px' width='300px' ></a>
            //         </div>";

            echo "<div class='column kolum'>
                <div class='img-thumbnail ''>
                     <a href='../BuyerPortal/Categories.php?type=$product_title'>
                        <img class='rounded mx-auto d-block images' src='../Admin/product_images//$product_image' width='350px' height='200px' alt='image'>
                     </a>
                </div>
            </div>";
        }

    }

    function getFruitsHomepage()
    {
        global $con;
        $query = "select * from products where product_cat = 2 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con, $query);
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_desc = $rows['product_desc'];
            $product_cat = $rows['product_cat'];
          
            echo "<div class='column kolum'>
                <div class='img-thumbnail ''>
                     <a href='../BuyerPortal/Categories.php?type=$product_title'>
                        <img class='rounded mx-auto d-block images' src='../Admin/product_images//$product_image' width='350px' height='200px' alt='image'>
                     </a>
                </div>
            </div>";
        }
    }
   
    // Checkout System Functions
    function cart()
    {
        if (isset($_SESSION['phonenumber'])) {
            if (isset($_GET['add_cart'])) {

                global $con;
                if (isset($_POST['quantity'])) {
                    $qty = $_POST['quantity'];
                } else {
                    $qty = 1;
                }
                $sess_phone_number = $_SESSION['phonenumber'];
                $product_id = $_GET['add_cart'];

                $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                $run_check = mysqli_query($con, $check_pro);

                if (mysqli_num_rows($run_check) > 0) {
                    echo "";
                } else {
                    $insert_pro = "insert into cart (product_id,phonenumber) values ('$product_id','$sess_phone_number')";
                    $run_insert_pro = mysqli_query($con, $insert_pro);
                }

                echo "<script>window.open('bhome.php','_self')</script>";
            }
        } else {
            // echo "<script>alert('Please Login First! ');</script>";
        }
    }

  
    function getFarmerProducts()
    {
        include("../Includes/db.php");
        global $con;
        $sess_phone_number = $_SESSION['phonenumber'];
        $query = "select * from products where farmer_fk in (select farmer_id from farmerregistration where farmer_phone=$sess_phone_number) ";
        $run_query = mysqli_query($con, $query);
        $count = 0;
        if ($run_query) {
            while ($row = mysqli_fetch_assoc($run_query)) {
                $count = $count + 1;
                $product_title =  $row['product_title'];
                $image =  $row['product_image'];
                $price =  $row['product_price'];
                $id =     $row['product_id'];
                $des =     $row['product_desc'];
                $path = "../Admin/product_images/" . $image;

                

                    echo "
                
                    <div class='productbox'>
                        
                        <img src='../Admin/product_images/$image' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg'>
                        </a>

                        <div>
                            <p><b>$product_title</b></p>
                            <p>$des</p>
                            <p><b>Price : Rs $price</b></p>
                                     <div class='row' style='padding:7px; margin-bottom:15px;' >
                                     <div class='col-6'> <a href='EditProduct.php?id=$id'' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-edit'>Edit Product</span></a></div>   
                                     <div class='col-6'><a  href='del.php?id=$id' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'>Delete</span></a> </div>
                                        </div>
                                    </div>
                           
                                    

                    </div>";
                    
            }
        } else {
            echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
        }
    }
 
    function getBuyerProductDetails()
    {
        include("../Includes/db.php");
        global $con;
       
        if (isset($_GET['id'])) {
            $prod_id = $_GET['id'];
            $query = "select * from products where product_id=" . $prod_id;
            $run_query = mysqli_query($con, $query);
            $resultCheck = mysqli_num_rows($run_query);
            if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];
                    echo "<div>
                        <img src='../Admin/product_images/$product_image' height='250px' width='300px' ><br>"
                        . " product title  :  " . $product_title . "<br>"
                        . " product type  :  " . $product_type . "<br>"
                        . " product stock  :  " . $product_stock . "<br>"
                        . " product Description  :  " . $product_description . "<br>"
                        . " product price  :  " . $product_price . "<br>"
                        . " product Delivery  :  " . $product_delivery . "<br>"
                        . " product category  :  " . $product_cat . "<br>"
                        . "<button href=''>ADD TO CART</button>"
                        . "</div>";

                    if (isset($_SESSION['phonenumber'])) {
                        $query = "select * from products where product_id=" . $prod_id;
                        $run = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $farmerid = $row['farmer_fk'];
                        }

                        $query = "select * from farmerregistration where farmer_id = $farmerid";
                        $run = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $farmer_name = $row['farmer_name'];
                            $farmer_phone = $row['farmer_phone'];
                            $farmer_address = $row['farmer_address'];
                        }
                        echo "farmer Name : " . $farmer_name . "<br>farmer Phone Number : " . $farmer_phone . "<br> Farmer Address" . $farmer_address;
                    }
                }
            }
        }
    }


    function totalItems()
    {
        global $con;
        if (isset($_SESSION['phonenumber'])) {
            $sess_phone_number = $_SESSION['phonenumber'];

            $get_items = "select * from cart where phonenumber = '$sess_phone_number'";
            $run_items =  mysqli_query($con, $get_items);
            $count_items =  mysqli_num_rows($run_items);
            return $count_items;
        } else {
            echo 0;
        }
    }


    function emptyCart()
    {
        global $con;
        $sess_phone_number = $_SESSION['phonenumber'];

        $get_items = "Delete from cart where phonenumber = '$sess_phone_number'";
        $run_items =  mysqli_query($con, $get_items);
        $count_items =  mysqli_num_rows($run_items);
    }


    function bestSeller()
    {
        global $con;
    }
    ?>

