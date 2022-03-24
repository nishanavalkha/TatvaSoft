<!DOCTYPE html>
<html>
<head>
    <title>MY FAq PAGE</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/faq1.css">
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
  
    <?php include './custnav.php';?>

        <div class="era"> <img src="../assets/image/faq-banner.png"></div>
        <div class="FAQ"> FAQs </div>

    <div class="raw" style="color: #ccc; ">----- <img src="../assets/image/separator.png" style="margin-top: 10px; width: 30px; height: 20px; ">-----</div>
    <div class="para">
        Whether You are Customer or Service provider, <br> We have tried our best to solve ala your queries and questions.
    </div>
    <div class="box">
        
            <div class="m1">FOR CUSTOMER</div>
            <div class="m2"> FOR SERVICE PROVIDER</div>

    </div>
            <ul class="ul-li">
				    <li class="padded">  What's included in a clening?</li>
				 	<li class="padded">testQA ??</li>
				 	<li class="padded"> Which Helperland professional will come to my place?</li>
				 	<li class="padded"> Can I skip or reschedule bookings?</li>
				 	<li class="padded"> test tatva</li>
				 	<li class="padded"> test tatvasosft</li>
				 	<li class="padded">Do I need to be home for the booking?</li>
			</ul>
        

            <div class="news">
                    <h4>SUBSCRIBE TO NEWSLETTER</h4>
                    <div class="type1"> 
                            <input type="text" name="" placeholder="Your Email">
                            <button> Submit</button>

                    </div>
            </div>

    <!-- navigation ending bar-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                 <script src="../assets/js/common.js"></script>

<?php  include 'footer.php'; ?>
</body>
</html>