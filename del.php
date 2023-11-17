
     <?php
include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber']; 

if (isset($_SESSION['phonenumber'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getting_prod = "select * from products where product_id = $id";
        $run = mysqli_query($con, $getting_prod);

        while ($details = mysqli_fetch_array($run)) {
            $pid=$details['product_id'];
            $product_title = $details['product_title'];
            $product_cat = $details['product_cat'];
            $product_price = $details['product_price']; 
            $product_desc = $details['product_desc'];
            $product_keywords = $details['product_keywords'];
           
        }
    }
}


$sql = "DELETE FROM products WHERE product_id= '$id'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Product deleted successfully')</script>";
    echo "<script>window.open('MyProducts.php','_self')</script>";
    } 
    else  {
        echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
    }
mysqli_close($con);
?>

