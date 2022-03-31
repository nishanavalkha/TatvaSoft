<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin service requests</title>
        
	
	<link rel="stylesheet" type="text/css" href="../assets/css/admin1.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />

</head>
<body>

<!-- The Modal -->

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content edit1">

      <!-- Modal Header -->
      <!-- <div class="modal-header">
        <h4 class="modal-title">Edit Service Request</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

     
        <div class="modal-body">
        
            <form action="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>

                     <div class="col-lg-6">
                        <label>Time</label>
                        <input type="Time" name="time" class="form-control">
                    </div>
                </div>
            <h4>Service Address</h4>
                <div class="row">
                     <div class="col-lg-6">
                        <label>Street name</label>
                        <input type="text" name="streetname" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>House number</label>
                        <input type="text" name="housenumber" class="form-control">
                    </div>
                </div>
             
                 <div class="row">
                     <div class="col-lg-6">
                        <label>Postal code</label>
                        <input type="text" name="postalcode" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="ap">City</label>
                                 
                                 <select class="option">
                                                <option selected>Select Customer</option>
                                                <option value="1">Type1</option>
                                                <option value="2">Type2</option>
                                                <option value="3">Type3</option>
                                 </select>
                    </div>
                </div>
            <h4>Invoice Address</h4>
                <div class="row">
                     <div class="col-lg-6">
                        <label>Street name</label>
                        <input type="text" name="streetname" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>House number</label>
                        <input type="text" name="housenumber" class="form-control">
                    </div>
                </div>

                <div class="row">
                     <div class="col-lg-6">
                        <label>Postal code</label>
                        <input type="text" name="postalcode" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="ap">City</label>
                                 
                                 <select class="option">
                                                <option selected>Select Customer</option>
                                                <option value="1">Type1</option>
                                                <option value="2">Type2</option>
                                                <option value="3">Type3</option>
                                 </select>
                    </div>
                </div>
                    <label style="font-size: 14px;">Why do you want to reschedule service request?</label>
                        <input type="text" name="" style ="height: 60px;width: 100%;" class="form-control" 
                                placeholder="Why do you want to reschedule service request?">

                    <label style="font-size: 14px;">Call Center EMP Notes</label>
                        <input type="text" name="" style ="height: 60px;width: 100%;" class="form-control" placeholder="Enter Notes">
            </form>
       
        </div>

      
      <div class="modal-footer">
        <button type="button" name="Update" style="width: 100%;height: 30px;" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
      </div> -->

    </div>
  </div>
</div>


    <!--header-->
    <section class="section-1">
            <nav class="navbar navbar-expand-lg navbar-light navb">
                <a class="navbar-brand" href="homepage.php">helperland</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  bnav">
                        <a class="nav-link manu text-white"><img src="../assets/image/admin-user.png" alt=""><span><?php echo $_SESSION['username']; ?></span></a>
                        <a class="nav-link manu logout" href="http://localhost/TatvaSoft/?controller=Helperland&function=logout"><img src="../assets/image/logout.png" alt=""></a>
                    </ul>
                </div>
            </nav>
    </section>
       

<section class="row main-type">
    <!-- main start -->

<div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills navbar-content leftsidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button> -->
                <a class="nav-link" id="v-pills-service-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-service" type="button" role="tab" aria-controls="v-pills-service" aria-selected="true">Service Requests</a> 
                <a class="nav-link" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="false">User Management</a>
        </div>
        
        <div class="tab-content" id="v-pills-tabContent" >
            <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
                <div class="blocks row">
                                <h2 class="mr-auto temp1">Service Requests</h2>
                </div>

                <form class="filter adding">
                    
                            <div class="form-row p1" style="display:flex;">
                                
                                <!-- <select class="form-select form-select-lg-md-4 form-control serviceid" aria-label=".form-select-lg example">
                                    <option selected ="true" disabled="disabled">Service Id</option>
                                    <option value="1">John Smith</option>
                                    <option value="2">vijay maliya</option>
                                    <option value="3">np patel</option>
                                </select> -->
                                <div class="form-group serviceid">
                                    <input type="text" class="form-control serviceidservicereuqest  serviceid" id="sid" placeholder="Service Id">
                                </div>
                                <div class="form-group postalcode">
                                    <input type="text" class="form-control postalcodeservierequest" id="pcode" placeholder="Postal Code">
                                </div>
                                <!-- <div class="form-group email">
                                    <input type="email" class="form-control  email" id="email" placeholder="Email">
                                </div> -->
                               
                                <select  class="selcust customers" style="margin: top 14px;">
   
                                    <option  selected="true" disabled="disabled"  value="1"   >Select Customer</option> 
                                    
                                </select>
                                <select  class="form-select form-select-lg-md-4 form-control sp sps">
                                    <option  selected="true" disabled="disabled" value="1"  >Select Service Provider</option> 
                                    
                                    
                                </select>
                                <select  class="form-select form-select-lg-md-4 form-control status">
                                    <option  selected="true" disabled="disabled" value="0">Select Status</option> 
                                    <option value='1'>New</option> 
                                    <option value='2'>Completed</option> 
                                    <option value='3'>Cancelled</option> 
                                   
                                </select>
                                <select  class="form-select form-select-lg-md-4 form-control sppaymentstatus" disabled>
                                    <option  selected="true" disabled="disabled">SP Payment Status</option> 
                                    <option value='1'>John Smith</option> 
                                    <option value='2'>Lyum watson</option> 
                                    <option value='3'>John Smith</option> 
                                    
                                </select>

                                <select  class="form-select form-select-lg-md-4 form-control statuspay" disabled>
                                    <option  selected="true" disabled="disabled">Select Status</option> 
                                    <option value='1'>John Smith</option> 
                                    <option value='2'>Lyum watson</option> 
                                    <option value='3'>John Smith</option> 
                                </select>
                            </div>  

                            <div class="form-row p2">  
                               
                                <div class="haspet">
                                    <input type="checkbox" class="checkbox pet" id="pet">
                                    <label class="checkbox-text" for="pet">Has Issues</label>
                                </div>
                                <input class="input-element fromdate fromdateservicereuqest form-group form-control" type="date" id="formdate" name="formdate" data placeholder="From Date">
                                <input class="input-element todate todateservicerequest form-group form-control" type="date" id="formdate" name="formdate" data placeholder="From Date">
                                <button type="submit" class="btn btn-search requestformsearch" >Search</button>
                                <button class="btn btn-reset form-control requestformreset" type="reset" id="reset">Clear</button>
                            </div>
                            
                </form>
                        <div class="table_usermanagement adminservicerequest" >
                            <!-- <table class="table" id="tblSRreq">
                                <thead id="headings">
                                    <tr class="" >
                                        <th scope="col">Service Id</th>
                                        <th scope="col">Service Date</th>
                                        <th scope="col"> Customer Details</th>
                                        <th scope="col">Service Provider</th>
                                        <th scope="col">Net Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Payment Status </th>
                                        <th scope="col">Actions </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class=""> -->
                                    <!-- <tr>
                                        <td>2323</td>
                                        <td>
                                            <p><img src="../assets/image/calendar2.png"> 09/04/2018</p>
                                            <p><img src="../assets/image/layer-14.png"> 12:00 - 18:00</p>
                                        </td>
                                        <td>
                                            <p>David Bough</p>
                                            <p><img src="../assets/image/layer-719.png"> Musterstrabe 5,</p>
                                            <p>12345</p>
                                            <p> Bonn</p>
                                        </td>
                                        <td>David Bough</td>
                                        <td>100</td>
                                       
                                        
                                        <td class="action"><button class="btn btn-pending">New</button></td>
                                        <td class="action"><button class="btn btn-active">notapp </button></td>
                                        <td class="action">
                                           <div class="dropdown">
                                                <a class="btn btn-dots" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Edit & Reschedule</a></li>
                                                    <li><a class="dropdown-item" href="#">Cancel SR by Cust</a></li>
                                                    <li><a class="dropdown-item" href="#">Inquiry</a></li>
                                                    <li><a class="dropdown-item" href="#">History Log</a></li>
                                                    <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                                                    <li><a class="dropdown-item" href="#">Other Transaction</a></li>
                                                </ul>
                                            </div>
                                        </td>          
                                    </tr> -->
                                    <!-- <tr>
                                        <td>2323</td>
                                        <td>
                                            <p><img src="../assets/image/calendar2.png"> 09/04/2018</p>
                                            <p><img src="../assets/image/layer-14.png"> 12:00 - 18:00</p>
                                        </td>
                                        <td>
                                            <p>David Bough</p>
                                            <p><img src="../assets/image/layer-719.png"> Musterstrabe 5,</p>
                                            <p>12345</p>
                                            <p> Bonn</p>
                                        </td>
                                        <td>David Bough</td>
                                        <td>100</td>
                                       
                                        <td class="action"><button class="btn btn-complete">complete</button></td>
                                        <td class="action"><button class="btn btn-notcom">Inactive</button></td>
                                        <td class="action">
                                           <div class="dropdown">
                                                <a class="btn btn-dots" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Edit & Reschedule</a></li>
                                                    <li><a class="dropdown-item" href="#">Cancel SR by Cust</a></li>
                                                    <li><a class="dropdown-item" href="#">Inquiry</a></li>
                                                    <li><a class="dropdown-item" href="#">History Log</a></li>
                                                    <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                                                    <li><a class="dropdown-item" href="#">Other Transaction</a></li>
                                                </ul>
                                            </div>
                                        </td>          
                                    </tr> -->
                                    
                                <!-- </tbody>
                            </table> -->
                        </div>
            
            </div>
              
                                  
    <!-- second user Management -->
            <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                <div class="blocks row">
                            <div class="blocks1" style="display:flex;" >  <h2 class="mr-auto temp1">User Management</h2>
                                <div class="adduser">
                                    <button class="btn adduserbtn"><i class="fa fa-plus-circle plus" aria-hidden="true"></i>Add New User</button>
                                </div>
                            </div>
                </div>

                <form class="filter adding1"  >
                            <div class="form-row r1" style="display:flex;">
                                <select  class="form-select form-select-lg-md-4 form-control username seluser">
                                    <option  selected="true" disabled="disabled">User Name</option> 
                                    
                                </select>
                                <select  id="selUserRole" class="form-select form-select-lg-md-4 form-control usertype usertypeuser">
                                    <option  selected="true" disabled="disabled">User Type</option> 
                                    <option value='1'>Service provider</option> 
                                    <option value='2'>Customer </option> 
                                   
                                </select>
                               
                                
                                <!-- <div class="input-group input-group-lg-md-4 form-control  mobiles" style="width:50px; height:40px;"  >
                                    <div class="input-group-prepend" id="mobilenum" style="width:50px; height:40px;">
                                        <div class="input-group-text" >+49</div>
                                    </div>
                                    <input type="text" class="form-control mobileuser"  id="phone" placeholder="Phone Number">
                                </div>  -->
                                <div class="form-group postalcode">
                                    <input type="text" class="form-control postalcode postalcodeuser" id="pcode" placeholder="Postal Code">
                                </div>
                                <!-- <div class="form-group email">
                                    <input type="email" class="form-control  email emailuser "  id="email" placeholder="Email">
                                </div> -->
                                <input class="input-element fromdate fromdateuser form-group form-control" type="date" id="formdate" name="formdate" placeholder="From Date">
                                <input class="input-element todate todateuser form-group form-control" type="date" id="formdate" name="formdate" placeholder="From Date">
                            <!-- </div>   -->
                            <!-- <div class="form-row r2">             -->
                                <button type="submit" class="btn  btn-search userformsearch" >Search</button>
                                <button class="btn reset userformreset"  id="reset">Clear</button>
                            </div>
                </form> 
                <form class="exportbtn" method="POST" action="http://localhost/TatvaSoft/?controller=Helperland&function=exportuserlist">
                            <button type="submit" class="btn export" id="export">Export</button>
                </form>
                        
                        <div class="table_usermanagement manage adminservicerequest1" >
                            <!-- <table class="table userdata" id="tblSRreq">
                                <thead id="headings">
                                    <tr class="" >
                                        <th scope="col">User Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col"> Date of Registration</th>
                                        <th scope="col">User Type</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Postal code</th>
                                        <th scope="col">Status </th>
                                        <th scope="col">Actions </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class=""> -->
                                    <!-- <tr>
                                        <td>vishal patel</td>
                                        <td>
                                            sp provider
                                        </td>
                                        <td>
                                            <p><img src="../assets/image/calendar2.png"> 6/8/2021</p>
                                        </td>
                                        <td>David Bough customer</td>
                                        <td>1001245</td>
                                        <td> 132456 </td>
                                        
                                        <td class="status"><button class="btn btn-active1">Active </button></td>
                                        <td class="action">
                                           <div class="dropdown">
                                                <a class="btn btn-dots" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Edit & Reschedule</a></li>
                                                    <li><a class="dropdown-item" href="#">Cancel SR by Cust</a></li>
                                                    <li><a class="dropdown-item" href="#">Inquiry</a></li>
                                                    <li><a class="dropdown-item" href="#">History Log</a></li>
                                                    <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                                                    <li><a class="dropdown-item" href="#">Other Transaction</a></li>
                                                </ul>
                                            </div>
                                        </td>          
                                    </tr> -->
                                    
<!--                                     
                                </tbody>
                            </table> -->
                        </div>
           
            </div>
    <!-- user Management end -->
                
            
        </div> 
</div>          
<!-- main end -->




</section> 







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="../assets/js/admin.js"></script>
<script  src="../assets/js/common.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>




</body>
</html>