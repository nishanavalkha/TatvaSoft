<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(isset($_SESSION['message'])) 

   { 
   		if(($_SESSION['message'])=="0") 
   		{
    		echo '<script> alert("pass confirm pass must be same"); </script>';
		}
		if(($_SESSION['message'])=="1") 
   		{
    		echo '<script> alert("email already taken!"); </script>';
		}
		if(($_SESSION['message'])=="2") 
   		{
    		echo '<script> alert("mobile number already taken!"); </script>';
		}
   }
  
  unset($_SESSION['message']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Customer signup page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 ">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" href="../assets/css/CustomerSignup1.css">
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
     if (!isset($_SESSION['UserId'])) { ?>
        <link rel="stylesheet" href="../assets/css/navbar.css">
    <?php  } ?>
    <?php if (isset($_SESSION['UserId'])) { ?>
        <link rel="stylesheet" href="../assets/css/loginav.css">
    <?php
    }
?>
</head>
<body>


<?php include('./custnav.php');    ?>


		<div class="row justify-content-center" id="acc">
				<h1 class="text-center" style="margin-top:100px;">Create an account</h1>

				<div class="text-center">-------- <img class="star" src="../assets/image/forma-1-copy-5.png"> --------</div>
		</div>


    <!-- row and justify-content-center class is used to place the form in center -->
 <section class="row justify-content-center">
      	
        	<div class="form-container" id="content">

        			<form action="http://localhost/TatvaSoft/?controller=Helperland&function=CSignup" method="post" id="signup-form">
        			<div class="text-center" id="name">
        				<input type="text" name="FirstName" title="first name"  placeholder="First Name" required>
        				<input type="text"  name="LastName" title="last name" placeholder="Last Name" required>
					</div>

					<div class="text-center" id="name">
						 <input type="text" name="Email" title="email" placeholder="Email address" required>
						 <input type="text" name="Mobile" title="mobile no." placeholder="Mobile Number" required>
					</div>

					<div class="text-center" id="name">
					
						 <input type="password" id="password_reg" name="Password" title="password" placeholder="Password" required>
						 <span class="glyphicon form-control-feedback" id="password_reg1"></span>
						 <input type="password" id="confirmPassword" title="confirm password" name="confirmPassword" placeholder=" Confirm Password" required>
						 <span class="glyphicon form-control-feedback" id="confirmPassword1"></span> 
					</div>
					<div class=" " style="margin-left: 30px; margin-top: 20px;">	<input type="checkbox" name="" > 				I have read the <a href="#"> Privacy Policy</a>	
									
					</div>


					<button type="Submit" name="Register" class="btn-primary" style="width: 170px;height: 40px; border-radius: 30px;  margin-left: 270px;color: white; font-weight: bolder;">Register</button>
						 

					 <div class="text-center"  style="color: black; margin-top: 20px; font-size: 20px;">Already registered? <a href="home.php">Login now</a></div>
					</form>
        	</div>
    	
</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
	
</body>
</html>

