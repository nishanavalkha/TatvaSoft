<!DOCTYPE html>
<html>
<head>
    <title>Contact page</title>
    <meta charset="utf-8">
    <meta name="viewport"content="width-device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/contact1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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

     <?php include 'custnav.php';?>

<div class="ii">
<img src="../assets/image/group-16_2.png">
</div>
<div class="primary">
<div class="pri" style="margin-left: 640px;"> Contact us </div>
    <div class="raw" style="color: #ccc; margin-left: 660px; ">----- <img src="../assets/image/separator.png" style="margin-top: 26px; width: 30px;  height: 20px; ">-----
    </div>
</div>
<div class="m2">
    <div class="logo1">
        <div class="i1"> <img src="../assets/image/forma-1_2.png"  alt=" ">
            <h5>KonigsWinterer Str. 116 <br> 53227 Bonn</h5>
        </div>

        <div class="i1"> <img src="../assets/image/phone-call.png" style="margin-left:200px;" alt=" ">
            <h5 class="" style="margin-left: 170px;">+49(288)28693320</h5>
        </div>

        <div class="i1"> <img src="../assets/image/vector-smart-object.png" style="margin-left: 200px;">
            <h5 class="" style="margin-left: 140px;">info@helperland.de</h5>
        </div>
    </div>
</div>

<div class="get" > Get in touch with us</div>
        <div class="box">

            <form  action="http://localhost/TatvaSoft/?controller=Helperland&function=ContactUs" method="post">
                 <div class="b1">
                    <input type="text" name="firstname" placeholder="First name">
                    <input type="text" name="lastname" placeholder="Last name">
                </div>

                <div class="b22"><button>+49</button>

                    <input type="text" name="PhoneNumber" placeholder="Mobile number" style="width: 218px;">
                    <input type="text" name="Email" placeholder="Email address">
                </div>

                <select class="first" name="Subject" >
                    <option selected>Subject</option>
                        <option value="1">type1 </option>
                        <option value="1">type2 </option>
                        <option value="1">type3 </option>
                        
                    
                </select>               
                <input type="text" name="Message" placeholder="Message" style="width: 544px; height: 80px; margin-top: 10px;">



                <input type="submit" value="Submit" name="submit" class=" btn btn-primary"  style="margin:30px 0 0 240px;">
            </form>
          
        </div>

<div class="map" style="background-image: url('../assets/image/group-16.png'); width:100%; height: 400px;background-repeat: none;">
    <img src="../assets/image/pin.png" style="width: 30px; height: 40px;">
</div>

<div class="news">
                    <p>SUBSCRIBE TO NEWSLETTER</p>
                    <div class="type1"> 
                            <input type="text" name="" placeholder="Your Email">
                            <button> Submit</button>

                    </div>
</div>


<?php include 'footer.php'; ?>
</body>
</html>