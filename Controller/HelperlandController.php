<?php
class HelperlandController
{
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
    $base_url = "http://localhost/helperland1/Views/contact.php";
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
                $custpage = "http://localhost/helperland1/Views/cust.php";
                $sppage="http://localhost/helperland1/Views/sp.php"; 
                if(($_POST['Email'] == "") || ($_POST['Password'] == "")){
                
                $base_url ="http://localhost/helperland1/Views/home.php";
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
        $base_url = "http://localhost/helperland1/Views/home.php";
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
           

        $base_url = "http://localhost/helperland1/Views/home.php";
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

      $base_url = "http://localhost/helperland1/Views/home.php";
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
                $body = "click the link to reset password  http://localhost/helperland1/Views/forgot.php";
                $headers = "From: nishanavalkha2251@gmail.com";
                $_SESSION['regmail']=$_POST['Email'];
                
                if (mail($to_email, $subject, $body, $headers)) {
                    $_SESSION['mailstatus'] = "1";
                } else {
                    $_SESSION['mailstatus'] = "2";
                }

                 $base_url = "http://localhost/helperland1/Views/home.php";
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
                $base_url = "http://localhost/helperland1/Views/home.php";
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
    		 			<input type="radio" name="gender" style="width: 22px; height: 25px;margin: 10px;"><span class="s1">Address:<?php echo " ".$address['AddressLine1']." ".$address['AddressLine2']."," .$address['City']."," .$address['PostalCode']."."; ?> <br><p id="s1" style="margin-left: 30px;">Phone number:<?php echo $address['Mobile']; ?></p></span>
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

      //  $Servicestartdate = $_POST['date']." ".$_POST['tdate'];

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
           $this->model->add_service_request($array);
        // echo $Servicestartdate;
    }
   
  }

?>
  
