<!DOCTYPE html>
<html>
<head>
	<title>customer page</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/customerpage1.css">
    

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

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



    <!-- modal servicedetail content -->

    <div class="modal fade" id="servicedetailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content SD">
                <!-- <div class="modal-header">
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
                <div class="modal-footer ft">
                    <button name="submit" class="btn btn-reschedule" data-bs-toggle="modal" data-bs-target="#reschedule_modal"><i class="fa fa-history" aria-hidden="true"></i>&nbsp; Reschedule</button>
                    <button name="submit" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#bookingrequest_modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Cancel</button>
                </div>   -->
            </div>
        </div>
    </div> 

<!--  servicedetail end modal  -->
<!-- start Reschedule modal -->
<div class="modal fade" id="reschedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Reschedule Service Request</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question "><b>Select New Date and Time</b></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="input-element rescheduledate" type="date" id="formdate" name="formdate" data placeholder="From Date">                   
                            </div>
                            <div class="col-sm-6">
                                <select name="booktime" class="rescheduletime" id="booktime">
                                    <option value=0>00:00</option>
                                    <option value="3:00">3:00 PM</option>
                                    <option value="4:00">4:00 PM</option>
                                    <option value="5:00">5:00 PM</option>
                                    <option value="6:00">6:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-update">Update</button>
                </div>
            </div>
        </div>
</div>

<!-- end Reschedule modal -->

<!-- cancel modal -->
     
    <div class="modal fade" id="bookingrequest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"><b>Cancel Service Request</b></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question temp"><b>Why you want to cancel the service request?</b></label>
                        <textarea class="why-cancel" name="whycancel"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-cancelnow">Cancel Now</button>
                </div>
            </div>
        </div>
    </div>
<!-- cancel modal end -->
<!-- rate spmodal -->

 <div class="modal fade" id="ratemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered temp-rating" role="document">
            <div class="modal-content ratesp">
              <!--  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">
                        <div class="d-flex align-items-center justify-content-left">
                            <div>
                                <img class="round-border" src="../assets/image/forma-1-copy-19.png" alt="cap">
                            </div>
                            <div class="ps-2">
                                <p class="sp-details">Lyum Watson</p>
                                <p class="sp-details">
                                <div class="rateyo" id= "rating"  data-rateyo-rating=" 4"></div>
                                    <span>3.67</span>
                                </p>
                            </div>
                        </div>
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="rate-service-text">Rate your service provider</label>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">On time arrival</label>
                            </div>
                            <div class="col-sm-7">
                            
                            <div class="rateyo" id= "rating" ></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Friendly</label>
                            </div>
                            <div class="col-sm-7">
                            
                            <div class="rateyo" id= "rating"  ></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Quality of service</label>
                            </div>
                            <div class="col-sm-7">
                            
                            <div class="rateyo" id= "rating"  ></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="subtext">Feedback on service provider</label>
                        </div>
                        <div class="row me-0 ms-0">
                            <textarea class="rate-feedback" name="feedback"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-ratesp-submit">Submit</button>
                </div> -->
            </div> 
        </div>
    </div> 




<!-- rate sp modal end -->
	<!-- edit modal -->
    <div class="modal fade" id="addedit_address_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content addmodal">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Edit Address</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                </div>
                <div class="modal-body addeditaddress">
                    <!-- <div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-danger err"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="streetname">Street name</label><br>
                                <input class="input" type="text" name="streetname" placeholder="Street name">
                            </div>
                            <div class="col-md-6">
                                <label class="addresslable" for="housenumber">House number</label><br>
                                <input class="input" type="text" name="housenumber" placeholder="House number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="postalcode">Postal code</label><br>
                                <input class="input" type="text" name="postal_code" placeholder="360005">
                            </div>
                            <div class="col-md-6">
                                <label class="addresslable" for="city">City</label><br>
                                <input class="input" type="text" name="city" placeholder="Bonn">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="phonenumber">Phone number</label><br>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" id="phonenumber" name="phonenumber" placeholder="9745643546">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button name="submit" class="btn btn-addresssave">save</button>
                    </div>  -->
                </div>
                
            </div>
        </div>
    </div>
    
<!-- edit modal end -->
    <div class="text-center welcome">
	    <span class="Welcome-Sandip">Welcome,
  		    <span class="text-style-1"><?php echo $_SESSION['username']; ?></span>
	    </span>
    </div>



<div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills navbar-content leftsidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button>
                <!-- <a class="nav-link" id="v-pills-newservice-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newservice" type="button" role="tab" aria-controls="v-pills-newservice" aria-selected="false">New Service Requests</button> -->
                <!-- <a class="nav-link" id="v-pills-upcomingservice-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upcomingservice" type="button" role="tab" aria-controls="v-pills-upcomingservice" aria-selected="false">Upcoming Services</button> -->
                <a class="nav-link" id="v-pills-schedule-tab" data-bs-toggle="pill" data-bs-target="#v-pills-schedule" type="button" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Service Schedule</button>
                <a class="nav-link" style="border-bottom:1px solid white;" id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false">Service History</button>
                <!-- <a class="nav-link" id="v-pills-myrating-tab" data-bs-toggle="pill" data-bs-target="#v-pills-myrating" type="button" role="tab" aria-controls="v-pills-myrating" aria-selected="false">My Ratings</button> -->
                <a class="nav-link" id="v-pills-block-tab" data-bs-toggle="pill" data-bs-target="#v-pills-block" type="button" role="tab" aria-controls="v-pills-block" aria-selected="false">Block Customer</button>
                <a class="nav-link" id="v-pills-invoices-tab" data-bs-toggle="pill" data-bs-target="#v-pills-invoices" type="button" role="tab" aria-controls="v-pills-invoices" aria-selected="false">Invoices</button>
                <a class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill" href="#" type="button" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notification</button>
        </div>
        
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                <div class="container-fluid row" style="margin-top:8px;">
                            <div class="go"><h3 class="serhist">Current Service Requests</h3>
                                <div class="btnaddnew"> <button class="btn ml-auto addnew">Add New Service Request</button></div>
                            </div>
                </div> 
            
                    <!-- row data 1 content -->
                        <div class="container-fluid row" id="rightsidebar" style="margin-top:14px;"> 
                            <div class="col dboard">
                            
                                <!-- <table id="content-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Service Id </th>
                                            <th >Service Date </th>
                                            <th >Sevice Provider </th>
                                            <th class="" style="padding-left:10px;">Payment</th>
                                            <th class="" style="padding-left:50px;">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class=""> -->
                                        
                                        <!-- <tr class="t-row">
                                            <td>2323</td>
                                            <td>
                                                <p class="date"><img src="../assets/image/calendar.png"> 31/03/2018</p>
                                                <p>12:00 - 18:00</p>
                                            </td>
                                            <td> 
                                                <div class="a flex-wrap row">
                                                    <div class="ro"><img src="../assets/image/forma-1-copy-19.png"></div>
                                                   <div>
                                                        <p class="lum-watson">Lyum Watson</p>
                                                        <div class="rateyo" id= "rating"  data-rateyo-rating="3" > </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="">&euro; 63</p>
                                            </td>
                                            
                                            <td>
                                            <button  class="reschedule" >Reschedule</button>
                                            <button  class="cancel" >Cancel</button>
                                            </td>
                                        </tr>  -->
                                        
                                    <!-- </tbody>
                                    
                                </table> -->
                            </div>
                        </div> 
                    <!-- end one data content -->
            </div>
            <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
    
                <div class="container-fluid row">
                            <div class="go"><h3 class="serhist"> Service History</h3>
                            <div class="btnaddnew"><button class="btn ml-auto addnew">Export</button></div>
                            </div>
                </div>
                        <div class="container-fluid row" id="rightsidebar"> 
                            <div class="col history" data-bs-toggle="modal" data-bs-target="#ratesp_modal" >
                                <!-- <table id="content-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>ServiceId</th>
                                            <th>Service Date </th>
                                            <th id="sd">Service Provider</th>
                                            <th id="cd">Payment</th>
                                            <th >Status</th>
                                            <th>Rate SP</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">  -->
                                         
                                        <!-- <tr class="t-row">
                                            <td><p>2323</p></td>
                                            <td>
                                                <p class="date"><img src="../assets/image/calendar2.png"> 31/03/2018</p>
                                                <p class="time"><img src="../assets/image/layer-712.png">12:00-18:00</p>
                                            </td>
                                            <td> 
                                                <div class="a flex-wrap row">
                                                    <div class="ro"><img src="../assets/image/forma-1-copy-19.png"></div>
                                                   <div>
                                                        <p class="lum-watson">Lyum Watson</p>
                                                        <p>
                                                        <img src="../assets/image/star1.png">
                                                        <img src="../assets/image/star1.png">
                                                        <img src="../assets/image/star1.png">
                                                        <img src="../assets/image/star1.png">
                                                        <img src="../assets/image/star2.png"> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="">&euro; 63</p>
                                            </td>
                                            <td><div class="status-completed text-center">Completed</div></td>
                                            <td ><button  class="rate-sp" style="margin-top:14px;" >Rate SP</button></td>
                                        </tr>  -->
                                    </tbody>
                                </table>
                            </div> 
                        </div> 

            </div>
           
            <!-- <div class="tab-pane fade" id="v-pills-upcomingservice" role="tabpanel" aria-labelledby="v-pills-upcomingservice-tab">hjjj</div> -->
            <div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab">.abc..</div>
            <!-- <div class="tab-pane fade" id="v-pills-myrating" role="tabpanel" aria-labelledby="v-pills-myrating-tab">..bvc.</div> -->
            <div class="tab-pane fade" id="v-pills-block" role="tabpanel" aria-labelledby="v-pills-block-tab">..bvc.</div>
            <div class="tab-pane fade" id="v-pills-invoices" role="tabpanel" aria-labelledby="v-pills-invoices-tab">.xas..</div>
            <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
        <!-- content mysetting -->

                <div class="customer-table mysetting">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-setting details active">My Details</button>
                                <button class="btn btn-setting addresses">My Addresses</button>
                                <button class="btn btn-setting password">Change Password</button>
                            </div>
                            <hr>
                            <div class="button-body">
                                <div class="details-body">
                                    <!-- <div class="row">
                                        <div class="col-md-4">
                                        
                                            <label for="fname" class="form-label">First name</label><br>
                                            <input type="text" class="input form-control" name="fname" placeholder="First name">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lname" class="form-label">Last name</label><br>
                                            <input type="text" class="input form-control" name="lname" placeholder="Last name">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email" class="form-label">E-mail address</label><br>
                                            <input type="email" class="input form-control" name="email" placeholder="E-mail address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="mobile" class="form-label">Mobile number</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">+49</span>
                                                <input type="text" class="input form-control" name="mobile" placeholder="Mobile number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4" >
                                            <label for="birthdate">Date of Birth</label><br>
                                           
                                            <input class="input-element date" style="margin-top:16px;" type="date" id="formdate" name="formdate" data placeholder="From Date">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="language">My Preferred Language</label><br>
                                            <select name="language" id="language" required>
                                                <option value="Gujarati">English</option>
                                                <option value="Maths">Hindi</option>
                                                <option value="Science">Gujarati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div><button class="btn details-save" >save</button></div>  -->
                                </div>
                                <div class="address-body">
                                    <table class="address-table">
                                        <thead>
                                            <tr>
                                                <th>Addresses</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="addressinsettings">
                                            <!-- <tr>
                                                <td>
                                                    <div class="addressline">
                                                        <div><b>Address:</b></div>&nbsp;
                                                        <div>Prabhukrupa, 360005-Rajkot</div>
                                                    </div>
                                                    <div class="addressline">
                                                        <div><b>Phone Number:</b></div>&nbsp;
                                                        <div>9845968794</div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div>
                                                        <i class="address-edit fa fa-edit" data-bs-toggle="modal" data-bs-target="#addedit_address_modal"></i>&nbsp;
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                            </tr> -->
                                            
                                            
                                        </tbody>
                                    </table>
                                    <div><button class="addnewaddress">Add New Address</button></div>
                                </div>
                                <div class="password-body">
                                    <div class="password_error text-danger"></div>
                                    <div>
                                        <label class="password-label" for="oldpassword">Old Password</label> <br>
                                        <input class="password-input" type="password" name="oldpassword" placeholder="Current Pasword" required>
                                    </div>
                                    <div>
                                        <label class="password-label" for="newpassword">New Password</label> <br>
                                        <input class="password-input" type="password" name="newpassword" placeholder="Password" required>
                                    </div>
                                    <div>
                                        <label class="password-label" for="confirmpassword">Confirm Password</label> <br>
                                        <input class="password-input" type="password" name="confirmpassword" placeholder="Confirm Password" required>
                                    </div>
                                    <div><button class="password-save">Save</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
</div>

<!-- <div class="last">
		
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
</div> -->

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
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script  src="../assets/js/customer.js"></script>
<script  src="../assets/js/common.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>
</html>