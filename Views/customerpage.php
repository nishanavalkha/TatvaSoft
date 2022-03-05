<!DOCTYPE html>
<html>
<head>
	<title>Booking Now Page </title>

	<link rel="stylesheet" type="text/css" href="../assets/css/customerpage1.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>

    <!-- modal servicedetail content -->

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
                <div class="modal-footer ft">
                    <button name="submit" class="btn btn-reschedule" data-bs-toggle="modal" data-bs-target="#reschedule_modal"><i class="fa fa-history" aria-hidden="true"></i>&nbsp; Reschedule</button>
                    <button name="submit" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#bookingrequest_modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Cancel</button>
                </div> 
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

<div class="modal fade" id="ratesp_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ratesp">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">
                        <div class="d-flex align-items-center justify-content-left">
                            <div>
                                <img class="round-border" src="../assets/image/forma-1-copy-19.png" alt="cap">
                            </div>
                            <div class="ps-2">
                                <p class="sp-details">Lyum Watson</p>
                                <p class="sp-details">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star2.png" alt="star">
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
                            <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star2.png" alt="star">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Friendly</label>
                            </div>
                            <div class="col-sm-7">
                            <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star2.png" alt="star">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Quality of service</label>
                            </div>
                            <div class="col-sm-7">
                            <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star1.png" alt="star">
                                    <img src="../assets/image/star2.png" alt="star">
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
                </div> 
            </div>
        </div>
    </div>




<!-- rate sp modal end -->
	<header>
    	<div class="img-fluid container-fluid bg">
			<img src="../assets/image/logo-large.png" class="logo img-fluid" style="width: 70px;height: 60px; margin-top:10px;" >
			    <nav class="navbar">
				    <ul>
                	<li><a href="" class="book"> Book now</a> </li>
                    <li><a href="" class="simple"> Prices & services </a> </li>
                    <li><a href="" class="simple"> Warranty</a> </li>
                    <li><a href="" class="simple"> Blog </a></li>
                    <li><a href="" class="simple"> Contact</a> </li>
                    <a href="" style="margin-left: 26px;"><img class="lo" src="../assets/image/icon-notification.png">
                            <span class="badge">2</span>
                    </a>
                    <li><button class="btn"><img src="../assets/image/user.png"> 
                                            <select>  
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                           	</select>
                        </button>
                    </li>
                    </ul>
        	    </nav>
       </div>
    </header>

    <div class="text-center welcome">
	    <span class="Welcome-Sandip">Welcome,
  		    <span class="text-style-1">Sandip!</span>
	    </span>
    </div>



<div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills navbar-content" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button>
                <a class="nav-link" style="border-bottom:1px solid white;" id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false">Service History</button>
                <a class="nav-link" id="v-pills-schedule-tab" data-bs-toggle="pill" data-bs-target="#v-pills-schedule" type="button" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Service Schedule</button>
                <a class="nav-link" id="v-pills-pros-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pros" type="button" role="tab" aria-controls="v-pills-pros" aria-selected="false">Favourite</button>
                <a class="nav-link" id="v-pills-invoices-tab" data-bs-toggle="pill" data-bs-target="#v-pills-invoices" type="button" role="tab" aria-controls="v-pills-invoices" aria-selected="false">Invoices</button>
                <a class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill" data-bs-target="#v-pills-notification" type="button" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notification</button>
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
                            <div class="col" data-bs-toggle="modal" data-bs-target="#servicedetailmodal">
                            
                                <table id="content-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Service Id </th>
                                            <th >Service Date </th>
                                            <th >Sevice Provider </th>
                                            <th class="" style="padding-left:10px;">Payment</th>
                                            <th class=""style="padding-left:50px;">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="dboard">
                                        
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
                                            
                                            <td >
                                            <button  class="reschedule" >Reschedule</button>
                                            <button  class="cancel" >Cancel</button>
                                            </td>
                                        </tr> 
                                         -->
                                    </tbody>
                                    
                                </table>
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
                            <div class="col" data-bs-toggle="modal" data-bs-target="#ratesp_modal" >
                                <table id="content-table" class="table">
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
                                    <tbody class="history">
                                        
                                        <tr class="t-row">
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
                                        </tr> 
                                    </tbody>
                                </table>
                            </div> 
                        </div> 

            </div>
            <div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab">.abc..</div>
            <div class="tab-pane fade" id="v-pills-pros" role="tabpanel" aria-labelledby="v-pills-pros-tab">..bvc.</div>
            <div class="tab-pane fade" id="v-pills-invoices" role="tabpanel" aria-labelledby="v-pills-invoices-tab">.xas..</div>
            <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">...xas</div>
        </div>
</div>

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
          <li><a href="#" style="text-decoration: none;">HOME</a></li>
          <li><a href="#" style="text-decoration: none;">ABOUT</a></li>
          <li><a href="#" style="text-decoration: none;">TESTIMONIALS</a></li>
          <li><a href="#" style="text-decoration: none;">FAQS</a></li>
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
  

</body>
</html>