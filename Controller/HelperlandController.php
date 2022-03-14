<?php
class HelperlandController
{
  // this is new
	 function __construct()
		{
			include('Models/Connection.php');
			$this-> model= new Helperland();
      session_start();
		}
	public function HomePage()
    	{
        	include("./Views/home.php");
    	}
    public function ContactUs()
    	{
    		if(isset($_POST)){ 
    $base_url = "http://localhost/TatvaSoft/Views/contact.php";
  		 $array = [
  		
                'FName' => $_POST['firstname'],
                'LName' => $_POST['lastname'],
                'Email' => $_POST['Email'],
                'Subject' => $_POST['Subject'],
                'PhoneNumber' => $_POST['PhoneNumber'],
                'Message' => $_POST['Message'],
                
           		  ];
           		$last= $this->model->ContactUs('contactus', $array);
           	
			}
			else{
				echo "error occured";
			}
		}
   public function Login()
   {
      if(isset($_POST))
      {
                $custpage = "http://localhost/TatvaSoft/Views/cust.php";
                $sppage="http://localhost/TatvaSoft/Views/sp.php"; 
                if(($_POST['Email'] == "") || ($_POST['Password'] == "")){
                
                $base_url ="http://localhost/TatvaSoft/Views/home.php";
                header('Location:' . $base_url);
           }
           else{
            $Email= $_POST['Email'];
            $Password=$_POST['Password'];
            $userdata = $this->model->UserData($Email,$Password);
            $usertypeid = $userdata['UserTypeId'];
            // $_SESSION['username']= $userdata['FirstName'];
            // $_SESSION['security'] = $userdata['UserId'];
           
            $_SESSION['UserId'] = $userdata['UserId'];
            if($usertypeid==1){
              
              header('Location:' . $custpage);
            }
            elseif($usertypeid==2){
              header('Location:' . $sppage);
            }
            else{
              echo "admin";
            }
          }
      }
   } 
   
   

   public function logout()
    {
        $base_url = "http://localhost/TatvaSoft/Views/home.php";
        session_unset();
        session_destroy();
        header('Location:' . $base_url);

    }

  public function CSignup()
  {
      if(isset($_POST))
      {

         if(($_POST['Password']) != ($_POST['confirmPassword']))
             {
                 $_SESSION['message'] = "0";
                 header('Location: ' . $_SERVER['HTTP_REFERER']);
                 exit;

             }
              

            $check_email_duplicate_count = $this->model->CheckEmail('user',$_POST['Email']);
            $check_mobile_duplicate_count = $this->model->CheckMobile('user',$_POST['Mobile']);

            if($check_email_duplicate_count > 0)
            {
                $_SESSION['message'] = "1";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
               
            if($check_mobile_duplicate_count > 0)
            {
                $_SESSION['message'] = "2";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
           

        $base_url = "http://localhost/TatvaSoft/Views/home.php";
         $array = [
                  'FName' =>$_POST['FirstName'],
                  'LName' =>$_POST['LastName'],
                  'Email' => $_POST['Email'],
                  'Mobile' =>$_POST['Mobile'],
                  'Password' =>$_POST['Password'],
                  'usertypeid'=>1,
        ];
        $this->model->Signup('user',$array);
        header('Location: ' . $base_url);
      }
      else{
        echo "error occured";
      }
  
}
  public function spSignup()
  {
    if(isset($_POST))
    {

         if(($_POST['Password']) != ($_POST['confirmPassword']))
             {
                 $_SESSION['message'] = "0";
                 header('Location: ' . $_SERVER['HTTP_REFERER']);
                 exit;

             }
              

            $check_email_duplicate_count = $this->model->CheckEmail('user',$_POST['Email']);
            $check_mobile_duplicate_count = $this->model->CheckMobile('user',$_POST['Mobile']);

            if($check_email_duplicate_count > 0)
            {
                $_SESSION['message'] = "1";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
               
            if($check_mobile_duplicate_count > 0)
            {
                $_SESSION['message'] = "2";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }

      $base_url = "http://localhost/TatvaSoft/Views/home.php";
      $array= [
                'FName' =>$_POST['FirstName'],
                'LName' =>$_POST['LastName'],
                'Email' => $_POST['Email'],
                'Mobile' =>$_POST['Mobile'],
                'Password' =>$_POST['Password'],
                'usertypeid'=>2,
      ];
      $this->model->Signup('user',$array);
      header('Location: ' . $base_url);
    }
  }
  public function ForgotPassword()
    {
        if (isset($_POST))
        {

          $is_registerd_mail =   $this->model->CheckEmail('user',$_POST['Email']);
            if($is_registerd_mail==1)
            {
                $to_email = $_POST['Email'];
                $subject = "RESET PASSWORD";
                $body = "click the link to reset password  http://localhost/TatvaSoft/Views/forgot.php";
                $headers = "From: nishanavalkha2251@gmail.com";
                $_SESSION['regmail']=$_POST['Email'];
                
                if (mail($to_email, $subject, $body, $headers)) {
                    $_SESSION['mailstatus'] = "1";
                } else {
                    $_SESSION['mailstatus'] = "2";
                }

                 $base_url = "http://localhost/TatvaSoft/Views/home.php";
                 header('Location: ' . $base_url);
               
            }
            else
            {
                $_SESSION['mailstatus'] = "3";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        }  
    }

    public function resetpassword(){
      if(isset($_POST)){
                $new_password=$_POST['password'];
                $email= $_SESSION['regmail'];
                $this->model->resetpass('user',$email,$new_password);
                unset($_SESSION['regmail']);
                $base_url = "http://localhost/TatvaSoft/Views/home.php";
                header('Location: ' . $base_url);
      }
    }

     public function availibility()
    {
       $zipcode =$_POST['zipcode'];
       $avail = $this->model->availibility($zipcode);
       if($avail != 0)
       {
           echo 1;
       }
       else
       {
           echo 0;
       }
    }
     
    public function addresseslist()
    {
        $zipcode =$_POST['zipcode'];
        $userid = $_SESSION['UserId'];
        $list = $this->model->addresslist($zipcode,$userid);
         $i=0;
         
        foreach($list as $address)
        {
         ?>
            <div class="box1" style="margin-top: 30px;">
    		 			<input type="radio" name="gender" style="width: 22px; height: 25px;margin: 10px;" value="<?php  echo $address['AddressId'] ?>" >
              <span class="s1">Address:<?php echo " ".$address['AddressLine1']." ".$address['AddressLine2']."," .$address['City']."," .$address['PostalCode']."."; ?> <br><p id="s1" style="margin-left: 30px;">Phone number:<?php echo $address['Mobile']; ?></p></span>
    		   	</div> 
         <?php
         
        $i++; }
    }
    public function insertdata(){

        $array =[
            'UserId'=> $_SESSION['UserId'],
            'AddressLine1' =>$_POST['streetname'],
            'AddressLine2' =>$_POST['housenumber'],
            'City' => $_POST['city'],
            'PostalCode' =>$_POST['postalcode'],
            'Mobile' =>$_POST['phonenumber']
        ];
        $this->model->insertaddress($array);
    }
    public function servicerequest(){

       $Servicestartdate = $_POST['date']." ".$_POST['tdate'];

      $array= [
        'UserId'=> $_SESSION['UserId'],
        'ServiceStartDate' =>$_POST['date']." ".$_POST['tdate'],
        'ZipCode'=> $_POST['postalcode'],
        'ServiceHours'=> $_POST['servicehours'],
        'ExtraHours' => $_POST['extraservicehours'],
        'SubTotal'=> $_POST['totalcleaning'],
        'TotalCost' =>$_POST['totalpayment'],
        'Comments' =>$_POST['comments'],
        'HasPets'=>$_POST['haspet']
      ];
         $reqid =  $this->model->add_service_request($array);
         $saddid = $_POST['saddid'];
         $reqAdd = [
              'reqid' => $reqid,
              'addid' => $saddid,
         ];
         $this->model->add_service_request_address($reqAdd);
         $SpList =$this->model->getServiceById($_POST['postalcode']);

         foreach($SpList as $Sps){
              $to_email = $Sps['Email'];
              $subject = "New Service Request";
              $body = "helperland  company got new service request";
              $headers = "From: nishanavalkha2251@gmail.com";
              mail($to_email, $subject, $body, $headers);
              //echo $Sps['Email'];
          }
       
           //echo $Sps['Email']; 
    }
    public function dbboard(){
      $list=$this->model->dbboard($_SESSION['UserId']);
      function HourMinuteToDecimal($hour_minute) 
      {
        $t = explode(':', $hour_minute);
        return $t[0] * 60 + $t[1];
      }
      function DecimalToHoursMins($mins)
      {
        $h=(int)($mins/60);
        $m=round($mins%60);
        if($h<10){$h="0".$h;}
        if($m<10){$m="0".$m;}
        return $h.":".$m;
      }
    if($list != NULL)
     {
       foreach($list as $pending)
      {
        $SP= $this->model->getUserbyId($pending['ServiceProviderId']);
        $dt=substr($pending['ServiceStartDate'],0,10);
        $tm=substr($pending['ServiceStartDate'],11,5);
        $totalmins=HourMinuteToDecimal($tm)+ (($pending['ServiceHours']+$pending['ExtraHours'])*60);
        $totime=DecimalToHoursMins($totalmins);
        $rates = $this->model->getratebyspid($pending['ServiceProviderId']);
        
        $j=0;
        $totalrate=0;
        if($rates==NULL)
        {
            $avrrate=0;
        }
        else
        {
            foreach($rates as $rate)
            {
                $totalrate+=$rate['Ratings'];
                $j++;
            }
            if($j == 0)
            {
                $avrrate=$totalrate;
            }
            else
            {
                $avrrate=$totalrate/$j;
            }
        }
        
        ?>
        <tr class="t-row" data-bs-toggle="modal" data-bs-target="#servicedetailmodal" id= "<?php echo $pending['ServiceRequestId']; ?>" >
       
        <td class="td" id="<?php echo $pending['ServiceRequestId']; ?>"> <p><?php echo $pending['ServiceRequestId']; ?></p></td>
        <td class="td" id="<?php echo $pending['ServiceRequestId']; ?>">
            <p class="date"><img src="../assets/image/calendar.png"> <?php echo $dt; ?></p>
            <p><?php echo $tm."-".$totime ; ?></p>
        </td>
        <td class="td"  id="<?php echo $pending['ServiceRequestId']; ?>"> 
            <div class="a flex-wrap row">
                <div class="ro"><img src="../assets/image/forma-1-copy-19.png"></div>
               <div>
                    <p class="lum-watson"><?php echo $SP['FirstName']; ?> </p>
                    <div class="rateyo" id= "rating"  data-rateyo-rating="<?php echo $avrrate; ?>" > </div>
                </div>
            </div>
        </td>
        <td>
            <p class="">&euro;<?php echo $pending['TotalCost']; ?></p>
        </td>
       
        <td id="<?php echo $pending['ServiceRequestId']; ?>">
        <button  type="button" class="reschedule" id="<?php echo $pending['ServiceRequestId']; ?>" data-bs-toggle="modal" data-bs-target="#reschedule_modal" >Reschedule</button>
        <button type="button"  class="cancel btn-cancelnow" id="<?php echo $pending['ServiceRequestId']; ?>" data-bs-toggle="modal" data-bs-target="#bookingrequest_modal" >Cancel</button>
        </td>
      </tr> 
    <?php
      }
     }
     else
     {?>
          <div class="text-center"><h4> No History Found</h4></div>
       <?php
     }
      //echo"hi";
   }
   
    public function SDmodal() // service details modal
    {
      $SR=$this->model->SRByreqId($_POST['requId']);
      $SP= $this->model->getUserbyId($SR['ServiceProviderId']);
      $SRAddress=$this->model->getSRAddbySRId($_POST['requId']);
      $customerAdd=$this->model->getUserAddbyAddId($SRAddress['AddressId']);
      $extras=$this->model->getextrabySRId($_POST['requId']);

      function HourMinuteToDecimal($hour_minute) 
      {
          $t = explode(':', $hour_minute);
          return $t[0] * 60 + $t[1];
      }
      function DecimalToHoursMins($mins)
      {
          $h=(int)($mins/60);
          $m=round($mins%60);
          if($h<10){$h="0".$h;}
          if($m<10){$m="0".$m;}
          return $h.":".$m;
      }
      $dt=substr($SR['ServiceStartDate'],0,10);
      $tm=substr($SR['ServiceStartDate'],11,5);
      $totalmins=HourMinuteToDecimal($tm)+ (($SR['ServiceHours']+$SR['ExtraHours'])*60);
      $totime=DecimalToHoursMins($totalmins);

      ?>
          <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
                <div class="modal-body ">
                    <div class="register-inputs  me-0 ms-0">
                        <div class="row">
                            <div>
                               <div> <span class="service-datetime"> <?php echo $dt." ".$tm."-".$totime ?></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Duration: </span>
                            </div>
                            <div class="service-detail-text">
                                <span><?php echo $SR['ServiceHours']+$SR['ExtraHours']." Hrs"; ?></span>
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
                                <span><?php echo $_POST['requId'] ?> </span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Extras: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> <?php 
                                        foreach($extras as $p)
                                        {
                                            $extraname=$this->model->getextrasbyextraId($p['ServiceExtraId']);
                                            echo $extraname['ServiceExtra'].",";
                                            
                                        }
                                
                                ?></span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Net Amount: </span>
                            </div>
                            <div class="service-detail-euro">
                                <span> &euro;<?php echo $SR['TotalCost']; ?></span>
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
                                <span> <?php echo $customerAdd['AddressLine1']."  ".$customerAdd['AddressLine2'].", ".$customerAdd['City']."  ".$customerAdd['State']." - ".$customerAdd['PostalCode'];  ?></span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Billing Address: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> Same as cleaning Address</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Phone: </span>
                            </div>
                            <div class="service-detail-text">
                                <span><?php if($SP!=NULL){echo $SP['Mobile'];} ?></span>
                            </div>
                            </div>      
                        </div>
                        <div class="row">
                            <div class="" style="display:flex;">
                            <div>
                                <span class="service-detail">Email: </span>
                            </div>
                            <div class="service-detail-text">
                                <span> <?php if($SP!=NULL){echo $SP['Email'];} ?></span>
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
                                <span><?php echo $SR['Comments']; ?></span>
                            </div>
                            </div>
                        </div>
                        <div class="row"><?php if(!$SR['HasPets']){ ?>
                            <div class="" style="display:flex;">
                            <div>
                                <span><i class='fa fa-times-circle'></i> </span>
                            </div>
                            <div class="service-detail-text">
                                <span> I don't have pets at home</span>
                            </div>
                            </div>
                        </div><?php } ?>
                    </div>
                </div>
                <div class="modal-footer ft" id="<?php echo $_POST['requId']; ?>">
                    <button name="submit" id="<?php echo $_POST['requId']; ?>" class="btn btn-reschedule" data-bs-toggle="modal" data-bs-target="#reschedule_modal"><i class="fa fa-history" aria-hidden="true"></i>&nbsp; Reschedule</button>
                    <button name="submit" id="<?php echo $_POST['requId']; ?>" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#bookingrequest_modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Cancel</button>
                </div> 
            
      <?php
    }

    public function service_history()
        {
            $list=$this->model->service_history($_SESSION['UserId']);
            function HourMinuteToDecimal($hour_minute) {
                $t = explode(':', $hour_minute);
                return $t[0] * 60 + $t[1];
            }
            function DecimalToHoursMins($mins)
            {
                $h=(int)($mins/60);
                $m=round($mins%60);
                if($h<10){$h="0".$h;}
                if($m<10){$m="0".$m;}
                return $h.":".$m;
            }
            if($list !=NULL)
            {
                foreach($list as $history){
                    $SP = $this->model->getUserbyId($history['ServiceProviderId']);
                    $dt=substr($history['ServiceStartDate'],0,10);
                    $tm=substr($history['ServiceStartDate'],11,5);
                    $totalmins=HourMinuteToDecimal($tm)+ (($history['ServiceHours']+$history['ExtraHours'])*60);
                    $totime=DecimalToHoursMins($totalmins);
                    $rates = $this->model->get_ratings_of_sp('rating', $history['ServiceRequestId']);
                
                ?>
                        
                                        <tr class="t-row"7888888888888888888889999999>
                                            <td><p><?php echo $history['ServiceRequestId']; ?></p></td>
                                            <td>
                                                <p class="date"><img src="../assets/image/calendar2.png"> <?php echo $dt; ?></p>
                                                <p class="time"><img src="../assets/image/layer-712.png"><?php echo $tm."-".$totime ?></p>
                                            </td>
                                            <td> 
                                                <div class="a flex-wrap row">
                                                    <div class="ro"><img src="../assets/image/forma-1-copy-19.png"></div>
                                                   <div>
                                                        <p class="lum-watson"><?php echo $SP['FirstName']; ?></p>
                                                    
                                                        <p>
                                                        <div class="rateyo" id= "rating" data-rateyo-rating ="<?php echo $rates['Ratings']; ?>" ></div> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="">&euro; <?php echo $history['TotalCost']; ?></p>
                                            </td>
                                            <td>
                                                <?php 
                                                        if($history['Status']==2)
                                                        {
                                                           ?> <div class="status-completed text-center">Completed</div><?php
                                                        }
                                                        elseif($history['Status']==3)
                                                        {
                                                            ?> <div class="status-completed text-center" style="background-color:red;">cancelled </div><?php
                                                        }
                                                ?>
                                                <!-- <div class="status-completed text-center">Completed</div>-->
                                                </td>
                                            <td ><button  class="rate-sp" data-bs-toggle="modal" data-bs-target="#ratemodal"  id=" <?php echo $history['ServiceRequestId']; ?> "   style="margin-top:14px;" <?php if($history['Status']==3){ echo "disabled";} ?>>Rate SP</button></td>
                                        </tr> 
                
                <?php
                }
                
            }
                else
                {
                    ?> <div class="text-center"> <h4>not history found</h4></div>
                    <?php
                }
        }

        // new

            public function fill_rating()
            {
              $rate = $this->model->get_ratings_of_sp('rating',$_POST['reqIdforreschedule']);
                ?> 
                
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">
                        <div class="d-flex align-items-center justify-content-left">
                            <div>
                                
                            <img class="round-border" src="../assets/image/forma-1-copy-19.png" alt="cap">
                            </div>
                            <div class="ps-2">
                                <p class="sp-details">Lyum Watson</p>
                                <p class="sp-details">
                                <div class="rateyo" id= "rating" ></div>
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
                            
                            <div class="rateyo ontime-arrival" id= "rating" data-rateyo-rating="<?php 
                                                    if($rate['OnTimeArrival']!=null){
                                                        echo $rate['OnTimeArrival']; 
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                             ?>" >
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Friendly</label>
                            </div>
                            <div class="col-sm-7">
                            
                            <div class="rateyo friendly" id= "rating" data-rateyo-rating="
                            
                            <?php 
                                                    if($rate['Friendly']!=null){
                                                        echo $rate['Friendly']; 
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                             ?>" >

                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Quality Of Service</label>
                            </div>
                            <div class="col-sm-7">
                            
                            <div class="rateyo quality" id= "rating" data-rateyo-rating=" <?php 
                                                    if($rate['QualityOfService']!=null){
                                                        echo $rate['QualityOfService']; 
                                                    }
                                                    else
                                                    {
                                                        echo '0';
                                                    }
                             ?>" >
                                                                                                
                                                                                             
                            </div>
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
                    <button name="submit" class="btn btn-ratesp-submit" id=" <?php echo $_POST['reqIdforreschedule']; ?> ">Submit</button>
                </div> 
            
            <?php 
            }
  
       public function reschedule()
       {
        //  echo($_POST['reqId']) ;
         $datetime = $_POST['rescheduledate']." ".$_POST['rescheduletime'];
        // echo $datetime;
           $this->model->reschedule($datetime,$_POST['reqId']);
       }

      public function cancel()
      {
         $this->model->cancel($_POST['comment'],$_POST['reqId']);
        //  echo("jii");
       }

       public function rate_button()
       {
          $checkrate= $this->model->get_ratings_of_sp('rating',$_POST['rateidforsub']);
          $SR=$this->model->SRByreqId($_POST['rateidforsub']);
          $avg = ($_POST['OnTimeArrival']+ $_POST['Friendly'] + $_POST['quality'])/3;
            $array =[
                'rateidforsub' => $_POST['rateidforsub'],
                'ratingfrom' =>$_SESSION['UserId'],
                'ratingto' => $SR['ServiceProviderId'],
                'OnTimeArrival' => $_POST['OnTimeArrival'],
                'Friendly' => $_POST['Friendly'],
                'feedback' => $_POST['feedback'],
                'quality'=>$_POST['quality'],
                'avgrate' => $avg,
                'ratingdate' => date('Y-m-d H:i:s')

            ];
           $result=  $this->model->submitratting($array,$checkrate);
           echo $result;
            // print_r($array);
       }
    }

?>
  
