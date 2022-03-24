<!DOCTYPE html>
<html>
<head>
	<title>about page</title>
	<meta charset="utf-8">
	<meta name="viewport"content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/about1.css">
    
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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



<img src="../assets/image/hero-banner-img.png">
<div class="era">
<div class="pri" style="margin-left:580px; margin-top: 65px;"> A Few words about us </div>
    <div class="raw" style="color: #ccc; margin-left: 660px; ">-------- <img src="../assets/image/separator.png" style="margin-top: 26px; width: 30px;  height: 20px; ">--------
    </div>
</div>
<div class="l1">
  We are providers of professional home services, offering hourly based house Cleaning options, Which mean that yoy don't<br>  have to gret about getting your  house cleaned anymore. We will handle everything for you, so that you can focus on spending<br> your  precious time with your family members.
</div>

<div class="l2"> 

  We have number of experienced cleaners to help you make cleaning out or shifting your home easy affair.
</div>
<div class="era">
<div class="pri" style="margin-left:660px; margin-top: 80px;"> Our Story </div>
    <div class="raw" style="color: #ccc; margin-left: 660px; ">-------- <img src="../assets/image/separator.png" style="margin-top: 26px; width: 30px;  height: 20px; ">--------
    </div>
</div>
<div class="lol">

    A Cleaner is a type of industrial or domestic Worker who cleans homes or commercial premises for payment. Cleaners may specialise <br> in cleaning particular things or places, such  as window cleaners. Cleaners often work when  the people who otherwise occupy the<br> space are not around. They may clean offices at night or houses during the Workday.
</div>


<div class="news">

                    <h4>SUBSCRIBE TO NEWSLETTER</h4>
</div>
                 <div class="inline">
                            <div class="getmail"  style="">
                                <input type="text" placeholder="Your Email" style="border:1px solid black;
                                    border-radius: 20px; padding: 7px 6px 5px 5px;font-size: 12px; width: 166px;height: 30px;">
                            </div>
                                 <button class="but"> Submit</button>
                 </div>
                 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                 <script src="../assets/js/common.js"></script>
                 
<?php  include 'footer.php'; ?>


</body>
</html>