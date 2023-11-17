<?php
include("../Includes/db.php");
//session_start();
include("../Functions/functions.php");
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Farmer Login portal</title>
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<a href="https://icons8.com/icon/83325/roman-soldier"></a>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	


	<style>
		*{
			font-family: 'Cormorant Infant', serif;
		}

	.card{
  background-color: rgba(0,0,0, 0.1);
  backdrop-filter:blur(25px);
  border-radius:10px;
}
	.bg-image{
		background-size:cover;
		background-repeat:no-repeat;
	}
	.mute{
		color:rgb(113, 184, 80);
		
	}
	h6{
		color:black;
		font-weight:bold;
	}
	.forgot{
		color:black;
		font-weight:bold;
		/* color:rgb(113, 184, 80); */
	}
	.forgot:hover{
		font-weight:bold;
		color:black;
	}
	.gradient-custom-2 {
	background: #fccb90;
	background: linear-gradient(to right,#4c9a26, #4e9829,#3a8017,#2d6a0e);
	}
	.gradient-custom-3{
		background: linear-gradient(to right,#84d23f, #6cb72a,#5ca21d);
	}
	@media (min-width: 768px) {
	.gradient-form {
	height: 100vh !important;
	}
	}
	@media (min-width: 769px) {
	.gradient-custom-2 {
	border-top-right-radius: .3rem;
	border-bottom-right-radius: .3rem;
	}
	.gradient-custom-3{
		background: linear-gradient(to right,#8fe147, #6cb72a,#5ca21d);
	}
	}
</style>

</head>

<body>

	
	<section class="bg-image" 
     style="background-image: url('bg11.jpg');
            height: 100vh;" >
		
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-8">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body ">
			  <!-- p-md-5 mx-md-4 -->
                <div class="text-center">
                  <img src="dlogo.png" style="width: 75px;" alt="logo">
				  <h4 class="mt-1 mb-3 pb-1" style="font-weight:bold;">Farmer Login</h4>
                </div>

                <form action="FarmerLogin.php" method="post">
			  <div class="form-outline mb-4">
				  <label class="form-label" for="phone_number"><i class="fas fa-phone-alt mr-2"></i>Username</label>
                    <input type="text" id="phone_number" class="form-control" name="phonenumber"
                      placeholder="Phone number " required>
                  </div>

                  <div class="form-outline mb-4">
				  <label class="form-label" for="p1"><i class="fas fa-lock mr-2"></i>Password</label>
                    <input type="password" id="p1" class="form-control" name="password" placeholder="password" required>
                  </div><br>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2  mb-3" type="submit" name="login" value="login">Login</button>
                    <a class="forgot" href="FarmerForgotPassword.php">Forgot password?</a>
                  </div>

                  <div class="mute d-flex align-items-center justify-content-center pb-4 ">
                    <h6 class="mb-0 me-2">Don't have an account?</h6>
                    <a type="button" class="btn btn-primary gradient-custom-3  mb-3" href="FarmerRegister.php">Create new</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" class="bg-image" 
        	style="background-image: url('far3.png');background-repeat:no-repeat;background-size:cover;
            height: 95vh;">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                <!-- <h4 class="mb-4">We are more than just a company</h4> -->
                
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	
</body>

</html>

<?php
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	// $ciphering = "AES-128-CTR";
	// $iv_length = openssl_cipher_iv_length($ciphering);
	// $options = 0;
	// $encryption_iv = '2345678910111211';
	// $encryption_key = "DE";
	// $encryption = openssl_encrypt(
	// 	$password,
	// 	$ciphering,
	// 	$encryption_key,
	// 	$options,
	// 	$encryption_iv
	// );
	// echo $encryption;

	$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$password'";
	echo $query;
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	}
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['farmer_id'];
	}

	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../FarmerPortal/farmerHomepage.php','_self')</script>";
}

?>