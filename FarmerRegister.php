<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Farmer Registration Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    
    <style>
       
    * {
        font-family: 'Cormorant Infant', serif;
    box-sizing: border-box;
    }
       
        .card{
            background-color: rgba(0,0,0, 0.1);
            backdrop-filter:blur(25px);
            border-radius:10px;
            margin:30px;
        }
        .gradient-custom-3{
		background: linear-gradient(to right,#8fe147, #6cb72a,#5ca21d);
	}
        .bg-image{    
		background-size:cover;
		background-repeat:no-repeat;
        height: 100%;
        
        background-image: url('bg11.jpg');
        background-attachment: fixed;
  background-size: 100% 100%;
	}
    

        </style>
</head>

<body class="bg-image">
<section class="bg-image" >
<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card">
                        <div class="text-center" style="background:linear-gradient(to right,#8fe147, #6cb72a,#5ca21d) ;font-family: 'Cormorant Infant', serif;border:1px ridge rgb(2, 39, 1);">
                              <h3>Farmer Registration</h3>
                        </div>
						<div class="card-body border border-dark">
							<form name="form1" action="FarmerRegister.php" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user mr-2"></i><b>Full Name</b></label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control border border-dark" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right"><i class="fas fa-home mr-2"></i><b>Present Address</b></label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" rows="3" class="form-control border border-dark"  name="address" placeholder="Address" required></textarea>
									</div>
								</div>	
							
                               

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>PAN No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="pan" placeholder="Pan number" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-university mr-2"></i><b>Bank Account No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account1" class="form-control border border-dark" name="account" placeholder="Bank Account number" required>
									</div>
								</div>


								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-6">
										<input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
									<div class="col-md-6">
										<input id="p2" class="form-control border border-dark" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary " style="background-color:green;color:black;border:2px ridge rgb(2, 39, 1);"   name="register" value="Register">
										Register
									</button>
								</div>
							</form>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</main>
    </section>
   
</body>

</html>






<?php

include("../Includes/db.php");

if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$pan = mysqli_real_escape_string($con, $_POST['pan']);
    $account = mysqli_real_escape_string($con, $_POST['account']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);



	if (strcmp($password, $confirmpassword) == 0) {

		$query = "insert into farmerregistration (farmer_name,farmer_phone,
        farmer_address,farmer_pan,farmer_bank,farmer_password) 
        values ('$name','$phonenumber','$address',
        '$pan','$account','$password')";


		$run_register_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	} else if (strcmp($password, $confirmpassword) != 0) {
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}
}


?>