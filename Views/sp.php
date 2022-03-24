<!-- <h1> this is service provider</h1> -->
<?php
	 if(!isset($_SESSION))
    {
        session_start();
    }
    // echo $_SESSION['UserId'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service provider page</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/sp1.css">
    

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

<!-- details model -->
<div class="modal fade" id="servicedetailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content SD">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="register-inputs  me-0 ms-0">
                        <div class="row">
                            <div>
                                <span class="service-datetime">05/10/2021&nbsp;8:00 - 11:30</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Duration: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> 3.5 Hrs</span>
                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Service Id: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> 123</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Extras: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> Inside cabinets</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Net Amount: </span>
                            </div>
                            <div class="service-detail-euro">
                                <span> &euro; 87.5</span>
                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Service Address: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> rajnagar-5, 360003 Rajkot</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Billing Address: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> rajnagar-5, 360003 Rajkot</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Phone: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> 9849389349</span>
                            </div>
                            </div>      
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Email: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> ksfds12@gmail.com</span>
                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Comments: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> service is good.</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span><i class='fa fa-times-circle'></i> </span>
                            </div>
                            <div class="service-detail-text">
                                <span> I don't have pets at home</span>
                            </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class=""><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.79219931298!2d72.5004358!3d23.0348564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc9d4dae36889fb9!2sTatvaSoft!5e0!3m2!1sen!2sin!4v1639749098244!5m2!1sen!2sin" allowfullscreen="" style="margin-top:18px; width:100%;" loading="lazy" class="map"></iframe></div>
                <div class="modal-footer ft">
                    <button name="submit" class="btn btn-reschedule" data-bs-toggle="modal" data-bs-target="#reschedule_modal"><i class="fa fa-history" aria-hidden="true"></i>&nbsp; Reschedule</button>
                    <button name="submit" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#bookingrequest_modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Cancel</button>
                </div>   
            </div>
        </div>
    </div> 




    <div class="text-center welcome">
	    <span class="Welcome-Sandip">Welcome,
  		    <span class="text-style-1"><?php echo $_SESSION['username']; ?></span>
	    </span>
    </div>

    <div class="loading d-none">Loading&#8230;</div>

<div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills navbar-content leftsidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button> -->
                <a class="nav-link" id="v-pills-newservice-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newservice" type="button" role="tab" aria-controls="v-pills-newservice" aria-selected="false">New Service Requests</button> 
                <a class="nav-link" id="v-pills-upcomingservice-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upcomingservice" type="button" role="tab" aria-controls="v-pills-upcomingservice" aria-selected="false">Upcoming Services</button> 
                <a class="nav-link" id="v-pills-schedule-tab" data-bs-toggle="pill" data-bs-target="#v-pills-schedule" type="button" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Service Schedule</button>
                <a class="nav-link"  id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false">Service History</button>
                <a class="nav-link" id="v-pills-myrating-tab" data-bs-toggle="pill" data-bs-target="#v-pills-myrating" type="button" role="tab" aria-controls="v-pills-myrating" aria-selected="false">My Ratings</button> 
                <a class="nav-link" id="v-pills-block-tab" data-bs-toggle="pill" data-bs-target="#v-pills-block" type="button" role="tab" aria-controls="v-pills-block" aria-selected="false">Block Customer</button>
                <a class="nav-link" id="v-pills-invoices-tab" data-bs-toggle="pill" data-bs-target="#v-pills-invoices" type="button" role="tab" aria-controls="v-pills-invoices" aria-selected="false">Invoices</button>
                <a class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill" href="#" type="button" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notification</button>
        </div>
        
        <div class="tab-content" id="v-pills-tabContent" >
            
            <div class="tab-pane fade" id="v-pills-newservice" role="tabpanel" aria-labelledby="v-pills-newservice-tab">

                <div class="container-fluid justify-content-right" style="display:flex; margin-top:10px;">
                            <div class=" "><span class="serarea" style="color:grey">Service Area</span></div>
                            <select name="serareadropdown" class="serareadropdown"  id="serareadropdown">
                                <option value=5 >5 KM</option>
                                <option value="10">10 KM</option>
                                <option value="15">15 KM</option>
                                <option value="20">20 KM</option>
                                <option value="25" selected>25 KM</option>
                            </select>
                            <div class="haspet">
                                <input type="checkbox" class="checkbox pet" style="margin-left:10px;">
                                <label class="checkbox-text" for="pet" style="color:grey;">Include Pet at home</label>
                            </div>
                </div>
                        <div class="container-fluid row db"> 
                            <div class="col">
                                <table  class="table">
                                    <thead>
                                        <tr>
                                            <th>Service Id </th>
                                            <th>Service Date </th>
                                            <th>Customer's Details</th>
                                            <th>Payment</th>
                                            <th>Time Conflict</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="newrequest">
                                        <!-- 1st row start-->
                                        <!-- <tr class="t-row" data-toggle="modal" data-target="#servicedetailmodal">
                                        <input type="checkbox" class="checkbox pet" style="margin-left:10px;">
                                            <td><p></p></td>
                                            <td>
                                                <p class="date"><img src="../assets/image/calendar2.png"> 09/04/2018</p>
                                                <p><img src="../assets/image/layer-14.png"> 12:00 - 18:00</p>
                                            </td>
                                            <td> 
                                                <p>David Bough</p>
                                                <p><img src="../assets/image/layer-719.png"> Musterstrabe 5,12345 Bonn</p>
                                            </td>
                                            <td>
                                                <p class="euro d-flex justify-content-center">&euro; 63</p>
                                            </td>
                                            <td><p></p></td>
                                            <td><button  class="btn accept-btn">Accept</button></td>
                                        </tr>  -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
           
            <div class="tab-pane fade" id="v-pills-upcomingservice" role="tabpanel" aria-labelledby="v-pills-upcomingservice-tab">

                        <div class="container-fluid row" id="rightsidebar"> 
                            <div class="col" >
                                <table id="content-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>ServiceId</th>
                                            <th>Service Date </th>
                                            <th id="sd">Customer Details</th>
                                            <th id="cd">Payment</th>
                                            <th >Distance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="upcoming">
                                        <!--1st row start-->
                                        <!-- <tr class="t-row" data-toggle="modal" data-target="#servicedetailmodal">
                                       
                                            <td><p>6767</p></td>
                                            <td>
                                                <p class="date"><img src="../assets/image/calendar2.png"> 09/04/2018</p>
                                                <p><img src="../assets/image/layer-14.png"> 12:00 - 18:00</p>
                                            </td>
                                            <td> 
                                                <p>David Bough</p>
                                                <p><img src="../assets/image/layer-719.png"> Musterstrabe 5,12345 Bonn</p>
                                            </td>
                                            <td>
                                                <p class="euro d-flex justify-content-center">&euro; 63</p>
                                            </td>
                                            <td><p>123456</p></td>
                                            <td><button  class="btn accept-btn">Accept</button></td>
                                        </tr>   -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

            </div>
            <div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab">.abc..</div>
            <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                <div class="container-fluid justify-content-right" style="display:flex; margin-top:10px;">
                            <div class="mr-auto"><span class="serarea temp" style="color:grey">Payment Status</span></div>
                            <select name="serareadropdown" class="serareadropdown"  id="PaymentStatus" disabled>
                                <option value=5 >5 KM</option>
                                <option value="10">10 KM</option>
                                <option value="15">15 KM</option>
                                <option value="20">20 KM</option>
                                <option value="25" selected>25 KM</option>
                            </select>
                           
                            
                </div>
                        <div class="container-fluid row" id="rightsidebar"> 
                            <div class="col" >
                                <table id="content-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Service Id </th>
                                            <th >Service Date </th>
                                            <th >Customer Details </th>
                                        </tr>
                                    </thead>
                                    <tbody class="sphistory">
                                         <!--1st row start-->
                                        <!-- <tr class="t-row">
                                            <td>2323</td>
                                            <td>
                                                <div class="date"><img src="../assets/image/calendar.png"> 31/03/2018</div>
                                                <div>12:00 - 18:00</div>
                                            </td>
                                            <td>
                                                <div>David Bough</div>
                                                <div><img src="../assets/image/layer-719.png"> Musterstrabe 5,12345 Bonn</div> 
                                            </td>
                                        </tr>   -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            <div class="tab-pane fade" id="v-pills-myrating" role="tabpanel" aria-labelledby="v-pills-myrating-tab">
            
                        <div class="container-fluid justify-content-right" style="display:flex; margin-top:10px;">
                            <div class="mr-auto"><span class="serarea" style="color:grey; margin-right:10px;">Ratings</span></div>
                            <select name="serareadropdown" class="serareadropdown"  id="PaymentStatus" >
                                <option value=5 >5 KM</option>
                                <option value="10">10 KM</option>
                                <option value="15">15 KM</option>
                                <option value="20">20 KM</option>
                                <option value="25" selected>25 KM</option>
                            </select>
                           
                        </div>
                        <table id="tablerating" class="table display">
                            <thead class="d-none"><th>details</th></thead>
                            <tbody class="sprate">
                                <!-- <tr class="mt-20 pt-20">
                                    <td>
                                        <div class="rate-detail" >
                                            <div class="rate-content" >
                                                <div>2323</div>
                                                <div><b>Rohit Parmar</b></div>
                                            </div>
                                            <div class="rate-content">
                                                <div>
                                                    <img src="../assets/image/layer-712.png" alt="clock">&nbsp; <span><b>23/12/2020</b></span><br>
                                                    <img src="../assets/image/calendar2.png" alt="calendar">&nbsp; <span> 19:20 to 19:30 </span>
                                                </div>
                                            </div>
                                            <div class="rate-content">
                                                <div><b>ratings</b></div>
                                                <div class="rate-detail">
                                                    <div class="rateyo pe-0 ps-0" id="rating" data-rateyo-rating="4"></div>
                                                    <div>good</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <div><b>Customer Comment</b></div>
                                            <div>kjgsdjhgjkfkjsdkf</div>
                                        </div>
                                    </td> 
                                </tr> -->
                            </tbody>
                        </table>

            </div>
            <div class="tab-pane fade block-card sp-block-customer-body" id="v-pills-block" role="tabpanel" aria-labelledby="v-pills-block-tab">

                    <div class="card-customer">
                            <!-- <div class="card">
                                <div class="customer-image"><img src="../assets/image/forma-1-copy-19.png" alt=""></div>
                                <div class="customer-name"><b>Rohit Parmar</b></div>
                                <div class="block-unblock-button">
                                    <button class="block-button">Block</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="customer-image"><img src="../assets/image/forma-1-copy-19.png" alt=""></div>
                                <div class="customer-name"><b>Rohit Parmar</b></div>
                                <div class="block-unblock-button">
                                    <button class="block-button">Block</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="customer-image"><img src="../assets/image/forma-1-copy-19.png" alt=""></div>
                                <div class="customer-name"><b>Rohit Parmar</b></div>
                                <div class="block-unblock-button">
                                    <button class="block-button">Block</button>
                                </div>
                            </div> -->
                    </div>
            </div>
            <div class="tab-pane fade" id="v-pills-invoices" role="tabpanel" aria-labelledby="v-pills-invoices-tab">.xas..</div>
            <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                    <!-- content mysetting -->

                <div class="customer-table mysetting">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-setting details active">My Details</button>
                                <button class="btn btn-setting password">Change Password</button>
                            </div>
                            <div class="button-body">
                                <div class="details-body">
                                    <div class="sp-details-body">
                                        <div class="d-flex align-items-center pb-2">
                                            <div><b>Account Status:</b></div>
                                            <div class="ps-2 active">Active</div>
                                        </div>
                                        <div class="row">
                                            <div class="sp-basic col-md-12">
                                                <b>Basic details</b>
                                                <hr class="sp-breakline">
                                                <div class="sp-avatar"><img src="../assets/image/cap.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="d-none row">
                                            <div class="col-md-12"><label class="label text-danger sp-error-message"></label></div>
                                        </div>
                                        <div class="row" style="margin-top:50px;">
                                            <div class="col-md-4">
                                                <label class="label" for="spfname">First name</label><br>
                                                <input type="text" class="input" name="spfname" placeholder="First name" required value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="splname">Last name</label><br>
                                                <input type="text" class="input" name="splname" placeholder="Last name" required value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="spemail">E-mail address</label><br>
                                                <input type="email" class="input" name="spemail" disabled placeholder="E-mail address" required value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="label" for="spmobile">Mobile number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                                    <input type="text" name="spmobile" placeholder="Mobile number" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="spdob">Date of Birth</label><br>
                                                <input type="date" class="input" name="spdob" required value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="spnationality">Nationality</label><br>
                                                <select name="spnationality" id="spnationality">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <option value="1" >German</option>
                                                    <option value="2" >Italian</option>
                                                    <option value="3" >British</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="label" for="splanguage">Language</label><br>
                                                <select name="splanguage" id="splanguage" required>
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <option value="1" >German</option>
                                                    <option value="2" >English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="label" for="spgender">Gender</label><br>
                                            <div class="gender col-md-6">
                                                <div>
                                                    <input type="radio" id="male" name="male" value="1">
                                                    <label for="male">Male</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="female" name="female" value="2" >
                                                    <label for="female">Female</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="notsay" name="notsay" value="0">
                                                    <label for="notsay">Rather not to say</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="label" for="avatar">Select Avatar</label><br>
                                                <div class="choose-avatar">
                                                    <div class="avatar-image"><img id="avatar1" src="../assets/image/avatar-car.png" alt=""></div>
                                                    <div class="avatar-image"><img id="avatar2" src="../assets/image/avatar-female.png" alt=""></div>
                                                    <div class="avatar-image"><img id="avatar3" src="../assets/image/avatar-hat.png" alt=""></div>
                                                    <div class="avatar-image"><img id="avatar4" src="../assets/image/avatar-iron.png" alt=""></div>
                                                    <div class="avatar-image"><img id="avatar5" src="../assets/image/avatar-male.png" alt=""></div>
                                                    <div class="avatar-image"><img id="avatar6" src="../assets/image/avatar-ship.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <b>My address</b>
                                                <hr class="sp-breakline">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="label" for="spstreetname">Street name</label><br>
                                                <input type="text" class="input" name="spstreetname" placeholder="street name" required value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="sphousenumber">House number</label><br>
                                                <input type="text" class="input" name="sphousenumber" placeholder="house number" required value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label" for="sppostalcode">Postal code</label><br>
                                                <input type="email" class="input" name="sppostalcode" placeholder="postalcode" required value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="label" for="spcity">City</label><br>
                                                <input type="text" class="input" name="spcity" placeholder="city" required value="">
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="sp-details-save">Save</button>
                                        </div> 
                                    </div>
                                </div>
                                <div class="password-body">
                                    <div class="password_error text-danger"></div>
                                    <div>
                                        <label class="password-label" for="oldpassword">Old Password</label> <br>
                                        <input class="password-input" type="password" name="oldpassword" placeholder="Current Pasword">
                                    </div>
                                    <div>
                                        <label class="password-label" for="newpassword">New Password</label> <br>
                                        <input class="password-input" type="password" name="newpassword" placeholder="Password">
                                    </div>
                                    <div>
                                        <label class="password-label" for="confirmpassword">Confirm Password</label> <br>
                                        <input class="password-input" type="password" name="confirmpassword" placeholder="Confirm Password">
                                    </div>
                                    <div><button class="password-save">Save</button></div>
                                </div>
                            </div>
                        </div>
                </div>
            
            
            </div>

            
        </div>
</div>
<!-- total nd -->
<div class="last">
		
			<div class="show1">Show 
											<select class="fi">
                                                <option selected>10</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            entries Total Record:55  
            </div>

			

			<div class="aero">
				<nav class="navbar3">
					<li><a href="#"><img src="../assets/image/first-page.png"></a></li>
					<li><a href="#"><img src="../assets/image/left.png"></a></li>
					<li><a class="no" style="background-color: #1d7a8c; color: white;">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li> <a href="#"><img src="../assets/image/right.png"></a></li>
					<li> <a href="#"><img src="../assets/image/firstpageright.png"></a></li>
				</nav>
			</div>
</div>

<!-- footer -->
<div class="footer" style="">
      
      <div class="col-12 col-md-1 text-center " style="padding-top: 20px;" >
        <img src="../assets/image/footer-logo.png" style="height: 80px; width: 120px;">
      </div>
<div class="nn">
      
        <ul>
          <li><a href="http://localhost/TatvaSoft/Views/home.php" style="text-decoration: none;">HOME</a></li>
          <li><a href="http://localhost/TatvaSoft/Views/about.php" style="text-decoration: none;">ABOUT</a></li>
          <li><a href="#" style="text-decoration: none;">TESTIMONIALS</a></li>
          <li><a href="http://localhost/TatvaSoft/Views/faq.php" style="text-decoration: none;">FAQS</a></li>
          <li><a href="#" style="text-decoration: none;">INSURANCE</a></li>
          <li><a href="#" style="text-decoration: none;">POLICY</a></li>
          <li><a href="#" style="text-decoration: none;">IMPRESSUM</a></li>
        </ul>
      
        <div class="last1">
        <div  class="social-media justify-content-center">
          <a class="#"><img src="../assets\image/ic-facebook.png"  style="height: 19px; width: 19px;"></a>
          <a class="#" style="padding-left: 25px;"><img src="../assets\image/ic-instagram.png" style="height: 19px; width: 19px;"></a>
        </div>
        </div>
</div>      
      <hr class="mx-auto "style="border:1px solid #424242;width:1320px;">
      <div class="row mx-auto">
        <div class=" text-center">
          <p style="color:#9BA0A3">@2018 Helperland. All rights reserved.   Terms and Conditions | Privacy Policy</p>
        </div>
      </div>
</div>
<!-- footer end -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="../assets/js/sp.js"></script>
<script  src="../assets/js/common.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>
</html>