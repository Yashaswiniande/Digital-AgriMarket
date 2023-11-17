<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer login</title>

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

       /* .card{
		background-color:rgba(1,1,0,0.3);
	} */
	.card{
  background-color: rgba(0,0,0, 0.1);
  backdrop-filter:blur(15px);
  border-radius:10px;
}
	.bg-image{
		background-size:cover;
		background-repeat:no-repeat;
        background-attachment: fixed;
  background-size: 100% 100%;
	}
	.mute{
		color:black;
        font-family: 'Cormorant Infant', serif;
        font-weight:bold;
		

	}
    p{
        margin-right:5px;
    }
  
	.forgot{
		color:black;
        font-family: 'Cormorant Infant', serif;
        font-weight:bold;
        /* text-decoration:underline; */
	}
	.forgot:hover{
		color:black;
        font-family: 'Cormorant Infant', serif;
        font-weight:bold;
	}
	.gradient-custom-2 {
	background: #fccb90;

	/* background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); */
	/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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

<body class="bg-image" 
     style="background-image: url('bg11.jpg');
            height: 100vh;">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card rounded-3 text-black">
          <div class="row">
            <div class="col">
              <div class="card-body ">
			  <!-- p-md-5 mx-md-4 -->
                <div class="text-center">
                  <img src="dlogo.png" style="width: 75px;" alt="logo">
				  <h4 class="mt-1 mb-3 pb-1" style="font-weight:bold;">Buyer Login</h4>
                </div>
                            <form name="my-form" action="BuyerLogin.php" method="post">

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right  "><b><i class="fas fa-phone-alt mr-2"></i>Phone Number</b></label>
                                    <div class="col-md-8">
                                        <input type="text" id="phone_number" class="form-control border border-dark col-md12" name="phonenumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-lock mr-2"></i>Password</b></label>
                                    <div class="col-md-8">
                                        <input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <div>
                                        <button class="btn btn-primary  gradient-custom-2  mb-3 col-xl-12" type="submit" name="login" value="login">Login</button><br>
                                        <a class="forgot" href="BuyerForgotPassword.php">Forgot password?</a>
                                    </div>
                                </div>

                                    <div class="mute d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <a type="button" class="btn btn-primary gradient-custom-3  mb-3" href="BuyerRegistration.php">Create new</a>
                                    </div>

                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


</body>

</html>

<?php
include("../Includes/db.php");

if (isset($_POST['login'])) {

    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // $ciphering = "AES-128-CTR";
    // $iv_length = openssl_cipher_iv_length($ciphering);
    // $options = 0;
    // $encryption_iv = '2345678910111211';
    // $encryption_key = "DE";

    // $encryption = openssl_encrypt(
    //     $password,
    //     $ciphering,
    //     $encryption_key,
    //     $options,
    //     $encryption_iv
    // );

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$password'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['buyer_id'];
    }

    $_SESSION['phonenumber'] = $phonenumber;
    echo "<script>window.open('../BuyerPortal/bhome.php','_self')</script>";
}

?>