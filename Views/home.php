<?php
	if(!isset($_SESSION)){
		 session_start();
	}
	 if(isset($_SESSION['mailstatus'])) 

   { 
   		if(($_SESSION['mailstatus'])=="1") 
   		{
    		echo '<script> alert("mail sent suceesfully"); </script>';
		}
		if(($_SESSION['mailstatus'])=="2") 
   		{
    		echo '<script> alert("mail not sent!"); </script>';
		}
		if(($_SESSION['mailstatus'])=="3") 
   		{
    		echo '<script> alert("Please enter registerd email!"); </script>';
		}
   }
  
  unset($_SESSION['mailstatus']);

?>
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

<!DOCTYPE html>
<html>
	<head>
		
		<title>Home Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 ">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"/>

        <!-- Bootstrap CSS -->
         <!-- <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" /> -->
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		  <!-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">  -->
		  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="http://localhost/TatvaSoft/assets/css/home1.css">
	</head>
	<body>
		
	
	<?php include './homenav.php';?>

			<!-- modal-->

		<div class="modal" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Login to Your account </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <form action="http://localhost/TatvaSoft/?controller=Helperland&function=Login" method="post">
                        <div class="mb-3 form-group icon-textbox" id="email">
                            <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="Email" title="Email">
                          	
                        </div>
                        <div class="mb-3 form-group icon-textbox">
                            <input type="password" name="Password" class="form-control" id="exampleFormControlInput2"
                                placeholder="Password" title="Password">
                          
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked" style="color: black;">
                                Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn-login"   name="login"> Login</button>
                         <div class="text-center mb-2"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#fogotmodal" data-bs-dismiss="modal" title="Forgot Password">Forgot Password?</a></div>
                        <div class="text-center" style="color: black;">Don't have an account? <a href="http://localhost/TatvaSoft/Views/CustomerSignup.php">Create an account</a></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
			

			 <!---------------------------------------------- Model For Forgot Password ------------------------------------------------------>

    <div class="modal" id="fogotmodal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel" title="Forgot  Password">Forgot Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/TatvaSoft/?controller=Helperland&function=ForgotPassword" method="post">
                        <div class="mb-3 form-group icon-textbox">
                            <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="Email" title="Email">
                           
                        </div>
                         <button type="Submit"  name="Send"  class="btn-login">Send</button>
                       
                        <div class="text-center mb-2"><a href="http://localhost/TatvaSoft/Views/forgot.php" data-bs-toggle="modal"
                            data-bs-target="#Modalform" data-bs-dismiss="modal" title="Login Now">Login now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 

   			

<div class="">
			<div class="container-fluid banner">
						
			
				<!-- <nav class=" nav_row  " id="navbar" >
					
					<div class="logo1"><img src="../assets/image/logo-large.png" style=" width: 120px; height: 75px;"></div>
					
				
					<div class="col-md-auto" style="margin-top: -45px; margin-left: 294px;" id="">
						<ul class="">
							
							<li><a href="http://localhost/TatvaSoft/Views/booknow.php" title="book a cleaner"  class="nav_btn">Book Now</a></li>
							<li><a href="http://localhost/TatvaSoft/Views/prices.php" title="prices" >Prices & services</a></li>
							<li><a href="" title="Our Guarantee" >Warranty</a></li>
							<li><a href="" title="blog">Blog</a></li>
							<li><a href="http://localhost/TatvaSoft/Views/contact.php" title="contact">Contact us</a></li>
							
        					<li><a href=""  data-bs-toggle="modal" data-bs-target="#modalForm">login</a></li>
							<li><a href="http://localhost/TatvaSoft/Views/SpSignup.php" title="Become a Helper" class="nav_btn">Become a Helper</a></li>
							
						</ul>
					</div>
				</nav> -->
				
				<div class="container-fluid ">
					<div class="">
						<div class="">
							<h1>Do not feel like housework?</h1>
							<h5>Great! Book now for Helperland and enjoy the benefits</h5>
							<p class="" style="margin-left: 30px; margin-top: 23px;" >
								<span><img src="../assets/image/ic-check.png"></span> Certified & insured helper<br>
								<span><img src="../assets/image/ic-check.png"></span>easy booking procedure<br>
								<span><img src="../assets/image/ic-check.png"></span>friendly Customer  service<br>
								<span><img src="../assets/image/ic-check.png"></span>Secure online payment method<br>
							</p>
						</div>
					</div>
					<div class="row22" style=" ">
						
						<a class="bookbtn" href="http://localhost/TatvaSoft/Views/booknow.php">Book a Helper</a>
						
						
					</div>
				
					<div class="container">
						<div class="pp " style="margin-top: 157px">
							<div class="col-auto text-center">
								<img class="" src="../assets/image/step-1.png">
								<p>Enter Your postcode</p>
							</div>
							<div class="col mt"><img src="../assets/image/step-arrow-1.png"></div>
							<div class="col-auto text-center">
								<img class="" src="../assets/image/step-2.png">
								<p>Select your plan</p>
							</div>
							<div class="col mt"><img src="../assets/image/step-arrow-1-copy.png"></div>
							<div class="col-auto text-center">
								<img class="" src="../assets/image/step-3.png">
								<p>Pay securely online</p>
							</div>
							<div class="col mt"><img src="../assets/image/step-arrow-1.png"></div>
							<div class="col-auto text-center">
								<img class="" src="../assets/image/step-4.png">
								<p>Enjoy amazing service</p>
							</div>
							
						</div>
						
						<div class="row" style="margin-top:42px;margin-bottom: 33px;">
							<div class="col text-center">
								<a href="#next"><img src="../assets/image/group-18_5.png"></a>
						    </div>
					    </div>
				    </div>
			
				</div>
			</div>


		
		<!-- /header -->
		<section class="" style=" background-color: #f2f2f2;">

			<div class="container" id="next" style="margin-top: 79px;">
				
					<div class="col "><h2>Convince yourself!</h2></div>
				
				
				<div class=" helper-row" style="margin-top: 20px;">
					<div class=" helper-col" >
						<img class="img1" src="../assets/image/helper-img-1.png" >
						<h4>Friendly & Certified Helpers </h4>
						<p class="helper_para">We want you to be completely satisfied With <br> our Service and feel comfortable at home. In  order to gurantee this, our helpers go  through a test procedure. Only When the  cleaners meet Our high standards, they may call themselves Helper.</p>
					</div>
					<div class=" helper-col">
						<img class="img2" src="../assets/image/group-23.png" style="margin-left: 60px;">
						<h4> Transparent and Secure Payment</h4>
						<p class="helper_para2"> We have transparent prices, you do not have to scratch money or money  on the <br>sideboard Leave it: pay your helper easily and securely via the online payment method.<br> You will also receive ana invoice for each completed cleaning.</p>
					</div>
					<div class=" helper-col">
						<img class="img3" src="../assets/image/group-24.png" style="margin-left: 60px;">
						<h4>We are here for you</h4>
						<p class="helper_para2">You have a question or need assistance with the booking process ? Our customer service is happy to help and advise you. How you can reach us <br> you will find out when you look under "Contact".We forward to hearing from you or reading.</p>
					</div>
				</div>
			</div>


			<div class="container-fluid" style="margin-top: 168.68px ; padding-top: 60px;">
				<img class="position-absolute "style="left:0px ; top:105rem; width:147px; margin: 29px 53px 84px 0; "src="../assets/image/blog-left-bg.png">
				<img class="position-absolute"style="right:0px ; top:105rem; width:147px;margin: 0 0 125px 23px;"src="../assets/image/blog-right-bg.png">
				<div class="container">
					<div class="row1">
						<div>
							<h6>We do not know what makes you happy.<br>but...</h6>
							<p style="color: #4F4F4F;">if it's not dusting off, friendly helpers wiil free you from this  burden-do not</p> <p style="color: #4f4f4f;"> Worry anymore 
							 about spending valuable time doing housework, but Savor </p>
							  <p style="color: #4f4f4f;">life, You're Well Worth Your time with beautiful experiences. Free</p>

							<p style="color: #4F4F4F;">yourself and enjoy the gained time : Go celebrate , relax, play With your children. </p>
							<p style="color: #4F4F4F;"> meet friends or dare to jump on the bungee. Other leisure ideas and exclusive events</p>

							<p style="color: #4f4f4f;"> can be found our blog-guaranteed free from dust and cleaning tips!</p>
						</div>
						
						<div class="three-image">
							<img src="../assets/image/group-36.png">
						</div>
					</div>

					
						
				</div>
			</div>

			<div class="container-fluid" style="background-color: #F4F5F8;padding-top:57.01px;">
				
					<div class="col"><h2>What Our Customers Say</h2></div>
				
				<div class="customer">
					
					<div class="col-lg-3" style="	height: 300px;">
							<div class="row">
								<div class="col text-left">
								<img src="../assets/image/message.png" alt="">
								</div>
							</div>
							<div class="row"  style="">
								<div class="" style=" margin-left:23px;  background-color: #f2f2f2; border-radius: 30px; border: 1px solid #f2f2f2; width: 70px; height: 60px;"><img src="../assets/image/cap.png" style="width: 49px; height: 40px;margin:5px 4px 2px 0;">
								</div>
							<div class="col text-left" style="margin-left:100px">
								<p style="font-size: 19.92px;color:#4F4F4F;font-weight: bolder; margin:0px"> Jacques</p>
								<p style="font-size: 13.95px;color:#8E8E8E;margin:0px">Falah</p>

							</div>
								<p style=" color:#4f4f4f; margin-left: 22px; margin-top: 20px;">Super Service Danke </p>
							</div>
					</div>

					
					<div class="col-lg-3 ">
							<div class="row">
								<div class="col text-right">
								<img src="../assets/image/message.png" alt="">
								</div>
							</div>
							<div class="row"  style="">
								<div class="" style=" margin-left:23px;  background-color: #f2f2f2; border-radius: 30px; border: 1px solid #f2f2f2; width: 70px; height: 60px;"><img src="../assets/image/cap.png" style="width: 49px; height: 40px;margin:5px 4px 2px 0;">
								</div>
							<div class="col text-left" style="margin-left:100px">
								<p style="font-size: 19.92px;color:#4F4F4F;font-weight: bolder; margin:0px"> Yahoo</p>
								<p style="font-size: 13.95px;color:#8E8E8E;margin:0px">Kunde</p>

							</div>
								<p style=" color:#4f4f4f; margin-left: 22px; margin-top: 20px;">Very  Good..! </p>
							</div>
					</div>

					
				</div>
				
			</div>
			
		</section>
 <footer>
    
    <div class="h">Get our Newsletter</div>
      <div class=" container newsletter">
          <input type="search" name="" value="" placeholder="YOUR EMAIL">
          <button type="submit">Submit</button>
      </div>
        
      
  
    
<div class="footer" style="">
      
      <div class="col-12 col-md-1 text-center " style="padding-top: 20px;" >
        <img src="../assets/image/footer-logo.png">
      </div>
<div class="nn">
      
        <ul>
          <li><a href="#" style="text-decoration: none;">HOME</a></li>
          <li><a href="#" style="text-decoration: none;">ABOUT</a></li>
          <li><a href="#" style="text-decoration: none;">TESTIMONIALS</a></li>
          <li><a href="#" style="text-decoration: none;">FAQS</a></li>
          <li><a href="#" style="text-decoration: none;">INSURANCE</a></li>
          <li><a href="#" style="text-decoration: none;">POLICY</a></li>
          <li><a href="#" style="text-decoration: none;">IMPRESSUM</a></li>
        </ul>
      
     	<div class="last">
        <div  class="social-media justify-content-center">
          <a class="#"><img src="../assets/image/ic-facebook.png"></a>
          <a class="#" style="padding-left: 25px;"><img src="../assets/image/ic-instagram.png"></a>
        </div>
      	</div>
</div>      
      <hr class="mx-auto "style="border:1px solid #424242;width:1320px;">
      <div class="row mx-auto">
        <div class="col text-center">
          <p style="color:#9BA0A3">©2018 Helperland. All rights reserved.   Terms and Conditions | Privacy Policy</p>
        </div>
        
      </div>
      
      
    </div>
 </footer>

		
 <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> -->
<script  src="../assets/js/customer.js"></script>
<script  src="../assets/js/common.js"></script>
</body>
</html>