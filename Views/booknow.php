<!DOCTYPE html>
<html>
<head>
	<title>Booking Now Page </title>

	<link rel="stylesheet" type="text/css" href="../assets/css/booknow1.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
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
                        </button></li>
            </ul>
        	</nav>
       </div>
</header>
  
     <div class="pri">  Set up your cleaning service </div>
    	<div class="raw" style="color: #ccc; margin-left: 660px;">-------- <img src="../assets/image/separator.png" style="margin-top: 26px; width: 30px;  height: 20px; ">--------
    	</div>

<!-- <div class="loader">
 
</div> -->
<div class="main-container" id="box">
	<div class="nav" style="height: 30px;width: 650px;">

         
    			<button class="but1" onclick="show1()" id="bt1"><img  id="btni1" src="../assets/image/setup-service-white.png"> <p id="btntxt1">Setup Service</p></button>
                    
          <button class="but disabled" onclick="" id="bt2"><img  id ="btni2" src="../assets/image/schedule.png"> <p id="btntxt2">Schedule & Plan</p></button>

          <button class="but disabled" onclick="" id="bt3"><img id="btni3" src="../assets/image/details.png"><p id="btntxt3">Your Details</p></button>

          <button class="but disabled" onclick="" id="bt4" style="width: 146px;"><img id="btni4" src="../assets/image/payment.png"><p id="btntxt4">Make Payment</p></button> 

                  <!--  setup  service content -->
 			<div id="body1" style="margin-top: 30px;">
                     <label for="" style="color: grey; font-weight: bold;">Enter your postal Code</label>
          		 <div class="l1">
                <input type="text" style="height: 40px; width: 240px;" name="" placeholder="postal code" class=" postalcode form-control" >
                
                <button class="ava"  style="margin-top: 14px;" >check Availability</button>
            	</div>
              <div class="avail-msg" onclick="av"></div>
			</div>  

			<!-- Schedule & Plan -->
			<div id="body2" style="">
     
                       <div class="cleaner">
                           <h5>When do you need the cleaner?</h5>
                           <h5>How long do you need your cleaner to stay?</h5>
                       </div>
                    <div class="ty">
                      <input class="input-element date" type="date" id="formdate" name="formdate" data placeholder="From Date">
                      
                        <select class="take-time" style="margin-left: 32px;">
                                                <option selected value="3:00">3:00</option>
                                                <option value="4:00">4:00</option>
                                                <option value="5:00">5:00</option>
                                                <option value="6:00">6:00</option>
                        </select>
                        <select class="fii time" style="margin-left: 32px;">
                                                <option selected value="3">3Hrs</option>
                                                <option value="4">4 Hrs</option>
                                                <option value="5">5 Hrs</option>
                                                <option value="6">6 Hrs</option>
                        </select>
                        
                    </div>

                    <div class="line"></div>

                    <div class="extra">Extra Service</div>

                        
                                <div class="icon">
                                    <div class="ic1 extra-service1">
                                        <img class ="i1" src="../assets/image/3.png" >
                                        <h6>inside cabiness</h6>
                                    </div>
                                 

                                    <div class="ic1 extra-service2">
                                        <img class ="i1" src="../assets/image/5.png">
                                        <h6>inside fridge</h6>
                                    </div>

                                    <div class="ic1 extra-service3">
                                        <img class ="i1" src="../assets/image/4.png">
                                        <h6>inside oven</h6>
                                    </div>
                                    
                                    <div class="ic1 extra-service4">
                                        <img  class ="i1" src="../assets/image/2.png">
                                        <h6>Laundry wash dry</h6>
                                    </div>

                                     <div class="ic1 extra-service5">
                                        <img  class ="i1" src="../assets/image/1.png">
                                        <h6>Interior windows</h6>
                                    </div>
                                </div> 
                                <div class="line" style="margin-top: 70px;"></div>  
                                <div class="com" required>Comments</div>
                                <input type="comment" name="Comments" class="form-control comm" placeholder="Comments"style ="width: 570px;height: 55px;margin-top: 14px;">
                                 
                                <div class="l"><input type="checkbox" name="HasPets" class="check haspett" >I have pets at home</div>

                                 <div class="line" style="margin-top: 19px;"></div> 

                                 <button type="b" onclick="show3()" name="Continue" class="b1 conbut" style="width: 100px;"> Continue</button> 
                     

    		</div>
    		<!-- Your Details -->
    		<div id="body3">
    			
    			<label class="enter">Enter your contact details,so we can serve you in better way!</label>
          <div class="row add" id="row">
          <!-- <div class="box1">
    					<input type="radio" name="gender" style="width: 22px; height: 25px;margin: 10px;"><span class="s1">Adsress:Koerigstrasse 111, Tambach-Dietharz 99897 <br><p id="s1" style="margin-left: 30px;">Phone number:9955648797</p></span>
    			</div>
    			<div class="box1" style="margin-top: 30px;">
    					<input type="radio" name="gender" style="width: 22px; height: 25px;margin: 10px;"><span class="s1">Adsress:Koerigstrasse 111, Tambach-Dietharz 99897 <br><p id="s1" style="margin-left: 30px;">Phone number:9955648797</p></span>
    			</div>
          -->

          </div>
    		
    			
    				<button class="round" href="#" data-bs-toggle="modal"
                            data-bs-target="#myModal"><i class="fa fa-plus"></i>Add New Address</button>
    			
    			<p id="" style="margin-top: 10px;"> Your Favourite Service Providers</p>
    			<hr>
    			<p id="" style="margin-top: 10px;">Youc can choose your favourite service provider from the below list</p>
    			
    								<div class="ic1"  style="background-color: #f1f1f1;">
                                        <img class ="i1"  src="../assets/image/cap.png" >
                                        <h6>Sandip Patel</h6>
                                    </div>
                                    <button type="button" class ="button-select">Select</button>
                                    <hr>
                				   <button type="b" class="b1" onclick="show4()" style="width: 100px; margin-top: 30px;"> continue</button>  
    		</div>
    	    <!-- The Modal -->

<div class="modal" id="myModal">
  <div class="modal-dialog" style="border:2px solid #ddd; margin-top: 293px; margin-left: 140px;">
    <div class="modal-content"style="border:2px solid #ddd; width: 600px;">

    

      <!-- Modal body -->
        <div class="modal-body">
        
            
                <div class="row">
                    <div class="col-lg-6">
                        <label>Street name</label>
                        <input type="text" name="Streetname"  placeholder="Street name" class="form-control Streetname">
                    </div>

                     <div class="col-lg-6">
                        <label>House number</label>
                        <input type="text" name="Housenumber" placeholder="House number" class="form-control Housenumber">
                    </div>
                </div>
           
                <div class="row">
                     <div class="col-lg-6">
                        <label>Postal code</label>
                        <input type="text" style="background-color:#f1f1f1;" name="Postalcode" placeholder="99697" class="form-control Postalcode">
                    </div>
                    <div class="col-lg-6">
                        <label>City</label>
                        <input type="text" name="City" placeholder="dfd" class="form-control City">
                    </div>
                </div>
                  <div class="col-lg-6">
                  <label>Phone number</label>
                  <input type="Phone" name="Mobile" class="form-control Mobile">
                  </div>
           
    </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" name="Save" class="saveaddress" id="save" data-bs-dismiss="modal">Save</button>
        <button type="submit" name="Cancel" id="cancel"  data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
 </div>
</div>
<!-- modal completed-->

      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
-->









		<div id="body4">
				<p id="" class="ggg" style="margin-top: 20px;">Pay securely with Helaperland payment gateway!</p>
			<div id="body1" style="margin-top: 30px;">
                     <label for="" style="color: grey; font-weight: bold;">Promo code(optional)</label>
          		<div class="l1">
                <input type="text" style="height: 40px; width: 240px;" name="" placeholder="Promo code(optional)" class="form-control">
         
                <button class="ava" style="margin-top: 14px;">Apply</button>
            	</div>
			</div>  
			<hr class="" style="width: 600px;margin-top: 20px;">
		
				<p class="avc" style="margin-top: 1PX;">Credit Card Payment</p>
				<input type="number" style="height: 40px;width: 600px;" name="cardnumber" placeholder="card number" class="form-control">
				<input type="date" style="height: 40px;width: 600px;" name="expire date" id="expire-date" class="form-control">
				<input type="password" style="height: 40px;width: 600px;" name="cvv" id="cvv" placeholder="password" class="form-control">
			
			<div class="card-img">
				<img id="c1" style="height: 80px;width: 80px;" src="../assets/image/visacard.jpg">
				<img id="c1" style="height: 40px;width: 50px;" src="../assets/image/mastercard.jpg">
				<img id="c1" style="height: 50px;width: 60px;" src="../assets/image/americancard.jpg">
			</div>
			<hr class="" style="margin-top: -14px;">

			<input type="checkbox" style="width: 25px;height: 20px;" name="term">I accepted <a href="#" style="text-decoration: none;">terms and conditions,</a>the <a href="#" style="text-decoration: none;">cancellation policy.</a>I confirm that Helperland starts to execute the contract before the expiry of the Withdrawal period and i lose my right withdrawal as a consumer with full performance of the contract.
			<hr>
			  <button class="ava1 completebook" style="margin-left: 460px;">Complete Booking</button>
		</div>

 	</div>

	
	 	<div class="wrapper">
              
                <h3>Payment Summary</h3>
                   <ul>
                    <li>
                      <span class="datetime"></span>
                      <span class="dt"></span>
                    </li>
                       <li>

                           <span>Duration Basic</span>
                           <span class="basic"></span>
                           
                       </li>
                        <li>
                          <span class="">Extra</span>
                        </li>
                        <li class="cabinates" style="display:none;">     
                          <span> inside cabinates</span>
                          <span>30 min</span>
                        </li>
                        <li class="fridge"style="display:none;">     
                          <span> inside fridge</span>
                          <span>30 min</span>
                        </li>
                        <li class="oven" style="display:none;">     
                          <span> inside oven</span>
                          <span>30 min</span>
                        </li>
                        <li class="laundry" style="display:none;">     
                          <span> Laundry and wash dry</span>
                          <span>30 min</span>
                        </li>
                        <li class="window" style="display:none;">     
                          <span> interior windows</span>
                          <span>30 min</span>
                        </li>
                       <hr class="" style="border: 1px solid black;">
                        <li>
                           <span>Total Service Time</span>
                           <span class="total-service"></span>
                        </li>
                        <hr class="" style="border: 1px solid black;">
                        <li>
                           <span>Per cleaning</span>
                           <span class="cleaning"> </span>
                         </li>
                         <hr class="" style="border: 1px solid black;">
                       <li>
                         <span>Total Payment</span>
                         <span class="total-payment"></span>
                     </li>
                   </ul>
                   <hr>
                  <div class="" style="background-color: #d3d3d3; "> <p style=" height:40px; margin-left: 20px;"> <img src="../assets/image/smiley.png"> See what is always included </p></div>
                   <h4 class="" style="margin-top: 20px; margin-left: 110px;">Questions?</h4>

                   <div class="" style="color: black; font-size: 15px;"><img src="../assets/image/right.png" style="height: 12px; width: 12px; "> What included in cleaning?</div>
                   <hr>

                   <div class="" style="color: black; font-size: 15px;"><img src="../assets/image/right.png" style="height: 12px; width: 12px; ">What Helperland professional will come to my place?</div>
                   <hr>
                   <div class="" style="color: black; font-size: 15px;"><img src="../assets/image/right.png" style="height: 12px; width: 12px; ">Can I skip or reschedule bookings?</div>
                   <hr>
                   <a href="faq.php" style="text-decoration: none;">For more help</a>
     	</div>
</div>  			
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script  src="../assets/js/main.js"></script> 
</body>
</html>