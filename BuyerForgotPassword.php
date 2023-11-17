<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
            *{
        font-family: 'Cormorant Infant', serif;
      }
 .bg-image {
  height: 100%; 
  overflow:hidden;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h3{
  font-weight:bold;
  margin-bottom:5px;
}
.bg-text {
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  padding: 20px;
  text-align: center;
}
.card{
  background-color: rgba(0,0,0, 0.1);
  backdrop-filter:blur(20px);
  border-radius:10px;
}

@media (min-width: 768px) {
	background-position: center;
  background-size: cover;
  height: 100%; 
  background-attachment: fixed;
	}
	@media (min-width: 769px) {
    background-position: center;
     background-size: cover;
     height: 100%; 
  }
    
    </style>
</head>

<body class="bg-image" style="background-image: url('bg11.jpg');height: 100vh;">
<div class="bg-text">		
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-12">
        <div class="card rounded-3 text-black">
              <div class="card-body ">
			  <!-- p-md-5 mx-md-4 -->
                <div class="text-center" style="font-weight:bold;">
                <h3 >FORGOT PASSWORD</h3>
                </div>

                <form action="BuyerForgotPassword.php" method="post">
				
			  <div class="form-outline mb-4">
				  <label class="form-label" for="phone_number">Phone number</label>
                    <input type="text" id="phone_number" class="form-control" name="phonenumber"
                      placeholder="Phone number " required>
                  </div>

                  <div class="form-outline mb-4">
				  <label class="form-label" for="p1">Pan Number</label>
                    <input type="text" id="p1" class="form-control" name="pan" placeholder="Pan Number" required>
                  </div>

                  <div class="form-outline mb-4">
				  <label class="form-label" for="phone_number">Password</label>
                    <input type="password" id="phone_number" class="form-control" name="password" placeholder="Password" required>
                  </div>

                  <div class="form-outline mb-4">
				  <label class="form-label" for="p1">Confirm Password</label>
                    <input type="password" id="p1" class="form-control" name="confirmpassword" placeholder="Confirm password" required>
                  </div>

                  
                  <div class="mute d-flex align-items-center justify-content-center pb-4">
                  
                  <input class="btn btn-success" type="submit" name="register" value="Update Password">
                  </div>

                </form>

          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- <div class="box">
        <form action="BuyerForgotPassword.php" method="post">
            <h3>FORGOT PASSWORD</h3>
     
            <br>
            <input type="phonenumber"  class="inp" name="phonenumber" placeholder="Phone Number" required><br>
            <input type="text" class="inp" name="pan" placeholder="Pan Number" required><br>

            <input type="password" class="inp" name="password" placeholder="Password" required><br>
            <input type="password" class="inp" name="confirmpassword" placeholder="Confirm Password" required><br><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>
        <br>
            <input type="submit" name="register" value="Update Password">
        </form>
    </div> -->
    
</body>

</html>

<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$password' 
                                    where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('BuyerLogin.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>