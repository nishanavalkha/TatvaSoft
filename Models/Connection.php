<?php
class Helperland
{

    /* Creates database connection */
    public function __construct()
     {
     	$servername="localhost";
     	$username= "root";
     	$password="";
     	$dbname="helperland";

     	//create connection
         $this->conn =  new mysqli($servername,$username,$password,$dbname);

		 if($this->conn->connect_error){
		  	die('database connection failed'.$this->conn->connect_error);
		  }
		  // else
		  // 	echo "successfuly";
	  }
  
   public function ContactUs($table,$array){

   		$FName=$array['FName'];
   		$LName=$array['LName'];
   		$Email=$array['Email'];
   		$Subject= $array['Subject'];
   		$PhoneNumber=$array['PhoneNumber'];
   		$Message = $array['Message'];

         $query = "INSERT INTO $table(firstname,lastname,Email,Subject,PhoneNumber,Message) VALUES('$FName','$LName','$Email','$Subject','$PhoneNumber','$Message')";

         	if($this->conn->query($query)==TRUE){
         		
         		echo "new recored insert successfuly";
         		
         	}
         	else{
         		echo "erroe: " .$query. "<br>" . $this->conn->error;
         	}
     }

    public function Signup($table,$array){
        $FName=$array['FName'];
        $LName=$array['LName'];
        $Email=$array['Email'];
        $Mobile=$array['Mobile'];
        $Password =$array['Password'];
        $usertypeid =$array['usertypeid'];

        $query = "INSERT INTO $table(FirstName,LastName,Email,Mobile,Password,UserTypeId) VALUES('$FName','$LName','$Email','$Mobile','$Password','$usertypeid')";
        if($this->conn->query($query)==TRUE){

          echo " new record inserted";
        }
          else{
            echo "erroe: " .$query. "<br>" . $this->conn->error;
          }
    }
     function UserData($Email,$Password){
       $query= "SELECT * FROM user WHERE Email = '$Email' AND Password = '$Password'";
       $result= mysqli_query($this->conn,$query);
       $row = mysqli_fetch_assoc($result);
       return $row;
      }

    function CheckEmail($table,$email)
    {
        $query = "SELECT * FROM $table WHERE Email='$email'";
        $result= mysqli_query($this->conn,$query);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }

    function CheckMobile($table,$mobile)
    {
        $query = "SELECT * FROM $table WHERE  Mobile = '$mobile'";
        $result= mysqli_query($this->conn,$query);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }
    function resetpass($table,$email,$Password){
        $query= "UPDATE $table SET Password ='$Password' WHERE  Email = '$email'";
        mysqli_query($this->conn,$query);
    }
    
    function availibility($zipcode)
    {
      $select_query = "SELECT * FROM zipcode WHERE  ZipcodeValue = '$zipcode'";
      $result = mysqli_query($this->conn , $select_query);
      $row = mysqli_num_rows($result);
      return $row;
    }

    function addresslist($zipcode,$userid)
    {
        $query = "SELECT * FROM useraddress WHERE  PostalCode = '$zipcode' AND  UserId ='$userid' ";
        $result= mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    function insertaddress($array)
    {
        $UserId= $_SESSION['UserId'];
        $AddressLine1=$array['AddressLine1'];
        $AddressLine2=$array['AddressLine2'];
        $City= $array['City'];
        $PostalCode=$array['PostalCode'];
        $Mobile= $array['Mobile'];
        $query = "INSERT INTO useraddress(UserId,AddressLine1,AddressLine2,City,PostalCode,Mobile)  VALUES ('$UserId','$AddressLine1','$AddressLine2','$City','$PostalCode','$Mobile')";
        $result= mysqli_query($this->conn,$query);
      }

      function add_service_request($array)
      {
        $UserId = $_SESSION['UserId'];
        $ServiceStartDate = $array['ServiceStartDate'];
        $ZipCode = $array['ZipCode'];
        $ServiceHours= $array['ServiceHours'];
        $ExtraHours = $array['ExtraHours'];
        $SubTotal = $array['SubTotal'];
        $TotalCost =$array['TotalCost'];
        $Comments= $array['Comments'];
        $HasPets= $array['HasPets'];

        $query= "INSERT INTO servicerequest(UserId,ServiceStartDate,ZipCode,ServiceHours,ExtraHours,SubTotal,TotalCost,Comments,HasPets) VALUES ('$UserId','$ServiceStartDate','$ZipCode','$ServiceHours','$ExtraHours','$SubTotal','$TotalCost','$Comments','$HasPets')";
        $result1= mysqli_query($this->conn,$query);
        $reqId = mysqli_insert_id($this->conn);
        return $reqId;

        // if($result1==TRUE){
        //   echo "success";
        // }
        //  else{
        //    echo "no";
        //  }
      }

      function add_service_request_address($reqAdd)
      {
        $reqid= $reqAdd['reqid'];
        $saddid =$reqAdd['addid'];
        $query = "INSERT INTO servicerequestaddress(ServiceRequestId,AddressId) VALUES ('$reqid','$saddid')";
        $result = mysqli_query($this->conn,$query);
      }

      function getServiceById($Zip)
      {
        $query = "SELECT * FROM user WHERE UserTypeId=2 AND ZipCode='$Zip'";
        $result= mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
      // echo $result;
      }
      function dbboard($userid)
       {
       $query = "SELECT * FROM servicerequest WHERE UserId = '$userid' AND  Status=1";
       $result= mysqli_query($this->conn,$query);
       $row= $result -> fetch_all(MYSQLI_ASSOC);
       return $row;
      }

      function getUserbyId($id)
    {
        $query = "SELECT * FROM user WHERE UserId = '$id' ";
        $result= mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row;
        
    }
    function SRByreqId($id)
    {
        $query = "SELECT * FROM servicerequest WHERE ServiceRequestId = '$id' ";
        $result= mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row;
      
    }
    function getSRAddbySRId($id)
    {
        $sql = "SELECT * FROM servicerequestaddress WHERE ServiceRequestId = '$id' ";
        $result= mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }
    function getUserAddbyAddId($id)
    {
        $sql = "SELECT * FROM useraddress WHERE AddressId = '$id' ";
        $result= mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row ; 
    }
    function getextrabySRId($rqid)
    {
        $sql = "SELECT * FROM servicerequestextra WHERE ServiceRequestId = '$rqid' ";
        $result= mysqli_query($this->conn,$sql);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    function getextrasbyextraId($id)
    {
        $sql = "SELECT * FROM extraservices WHERE ServiceExtraId = '$id' ";
        $result= mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }

    function service_history($userid){
        $query = "SELECT * FROM servicerequest WHERE UserId = '$userid' AND  Not status=1";
        $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
   
    function reschedule($datetime,$reqid){
      $query = "UPDATE servicerequest SET ServiceStartDate ='$datetime' WHERE  ServiceRequestId = '$reqid'";
      $result = mysqli_query($this->conn,$query);
      return $result;
    }
    function cancel($comment,$reqid)
    {
     
        $query = "UPDATE servicerequest SET Status =3,  Comments='$comment' WHERE  ServiceRequestId = '$reqid'";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function get_ratings_of_sp($table, $reqIdforreschedule)
    {
        $query = "SELECT * FROM $table WHERE ServiceRequestId = $reqIdforreschedule";
        $result = mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }

    function submitratting($array,$checkrate)
    {
          $rateidforsub = $array['rateidforsub'];
          $ratingfrom =$array['ratingfrom'];
          $ratingto= $array['ratingto'];
          $OnTimeArrival= $array['OnTimeArrival'];
          $Friendly= $array['Friendly'];
          $feedback= $array['feedback'];
          $quality= $array['quality'];
          $avgrate= $array['avgrate'];
          $ratingdate= $array['ratingdate'];
        if($checkrate==null)
        {
         
         $query= "INSERT INTO rating(ServiceRequestId,RatingFrom,RatingTo,Ratings,Comments,RatingDate,OnTimeArrival,Friendly,QualityOfService) VALUES ('$rateidforsub','$ratingfrom','$ratingto','$avgrate','$feedback','$ratingdate','$OnTimeArrival','$Friendly','$quality')";
          $result1= mysqli_query($this->conn,$query);
          // return 'y';
         
        }
        else{
          $query= "UPDATE rating SET RatingFrom='$ratingfrom' , RatingTo='$ratingto' , Ratings='$avgrate' , Comments='$feedback' , RatingDate='$ratingdate' , OnTimeArrival='$OnTimeArrival' , Friendly='$Friendly' , QualityOfService='$quality'  WHERE  ServiceRequestId = '$rateidforsub' ";
          mysqli_query($this->conn,$query);

        }
    }

    function getratebyspid($id)
    {
      $query = "SELECT * FROM rating WHERE RatingTo = '$id'";
      $result = mysqli_query($this->conn,$query);
      $row= $result -> fetch_all(MYSQLI_ASSOC);
      return $row;
    }
   
    function check_pass($email, $oldpassword)
    {
      $query = "SELECT * FROM user WHERE  Email='$email' AND Password='$oldpassword'";
      $result= mysqli_query($this->conn,$query);
      $rowcount=mysqli_num_rows($result);
      return $rowcount;
    }

    function update_pass($email, $newpassword)
    {
      $query = "UPDATE user SET Password = '$newpassword' WHERE  Email = '$email'";
      $result = mysqli_query($this->conn,$query);
      return $result;
    }

    function updatedetails($array)
    {

      $FirstName = $array['FirstName'];
      $LastName=$array['LastName'];
      $Mobile = $array['Mobile'];
      $UserId =$array['UserId'];
            $query= "UPDATE user SET FirstName= '$FirstName' , LastName='$LastName' , Mobile='$Mobile'   WHERE  UserId = '$UserId'";
         $result= mysqli_query($this->conn,$query);
         return $result;
    }

    function user_address($userid)
    {
      $query= "SELECT AddressId, AddressLine1, AddressLine2, City, State, PostalCode, Mobile FROM useraddress WHERE UserId = $userid";
      $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }

    public function fill_selected_useraddress($table, $selectedaddid)
    {
        $query = "SELECT AddressId, AddressLine1, AddressLine2, City, State, PostalCode, Mobile FROM $table WHERE AddressId = $selectedaddid";
        $result = mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }
    
    public function insertupdateadd($array, $edit)
    {

      if($edit == 0)
      {

        
        $AddressLine1 =$array['AddressLine1'];
        $AddressLine2 =$array['AddressLine2'];
        $City =$array['City'];
        $postal_code =$array['postal_code'];
        $phonenumber =$array['Mobile'];
        $UserId = $array['UserId'];

          $query = "INSERT INTO useraddress(UserId,AddressLine1, AddressLine2, City, PostalCode, Mobile)
                      VALUES ('$UserId','$AddressLine1','$AddressLine2','$City','$postal_code','$phonenumber')";
          $result= mysqli_query($this->conn,$query);
          return $result;
      }
      else
      {
        $AddressId =$array['AddressId'];
        $AddressLine1 =$array['AddressLine1'];
        $AddressLine2 =$array['AddressLine2'];
        $City =$array['City'];
        $postal_code =$array['postal_code'];
        $phonenumber =$array['Mobile'];
      

          $query = "UPDATE useraddress
                      SET AddressLine1 = '$AddressLine1', AddressLine2 = '$AddressLine2' , City = '$City', PostalCode = '$postal_code', Mobile = '$phonenumber'
                      WHERE AddressId = '$AddressId'";
          $result= mysqli_query($this->conn,$query);
          return $result;
      }
    
    }

    public function delete_selected_useraddress($table, $selectedaddid)
    {
        $query = "DELETE FROM $table WHERE AddressId = $selectedaddid";
        $result= mysqli_query($this->conn,$query);
        // return $result;
    }

    function newservice_req($id)
    {
        $query = "SELECT * FROM servicerequest WHERE SPAcceptedDate IS NULL AND  Status=1  AND (ServiceProviderId IS NULL OR ServiceProviderId='$id') ";
        $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }

    function upcoming($id)
    {
      $query = "SELECT * FROM servicerequest WHERE SPAcceptedDate IS NOT NULL AND  Status=1 AND  ServiceProviderId='$id' ";
      $result = mysqli_query($this->conn,$query);
      $row= $result -> fetch_all(MYSQLI_ASSOC);
      return $row;
    }
    function cancelrequest($id)
    {
        $query = "UPDATE servicerequest
                      SET ServiceProviderId=NULL, SPAcceptedDate=NULL
                      WHERE ServiceRequestId = '$id' ";
        $result= mysqli_query($this->conn,$query);
        return $result;
    }

    public function fill_selected_pending_request($selectedrequestid)
    {
        $query = "SELECT * FROM servicerequest WHERE ServiceRequestId = $selectedrequestid";
        $result = mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }
    function completerequest($id)
    {
        $query = "UPDATE servicerequest
                      SET Status=2
                      WHERE ServiceRequestId = '$id' ";
        $result= mysqli_query($this->conn,$query);
        return $result;
    }
    function sphistory($id)
    {
        $query = "SELECT * FROM servicerequest WHERE ServiceProviderId = '$id' AND Status=2";
        $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    function get_requests_for_that_date( $serviceproviderid, $date, $nextdate)
    {
        $query = "SELECT * FROM servicerequest 
                    WHERE ServiceProviderId = '$serviceproviderid' AND SPAcceptedDate IS NOT NULL  AND Status = 1 AND ServiceStartDate BETWEEN '$date' AND '$nextdate'";
        $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    function acceptrequest($array)
    {
      $ServiceRequestId =$array['ServiceRequestId'];
      $ServiceProviderId =$_SESSION['UserId'];
      $SPAcceptedDate =$array['SPAcceptedDate'];
        $query = "UPDATE servicerequest
                    SET ServiceProviderId = '$ServiceProviderId', SPAcceptedDate = '$SPAcceptedDate' 
                    WHERE ServiceRequestId = '$ServiceRequestId' ";
         $result= mysqli_query($this->conn,$query);
         return $result;
    }

    function sprate($id)
    {
    
          $query = "SELECT * FROM rating WHERE RatingTo = '$id' ";
          $result = mysqli_query($this->conn,$query);
          $row= $result -> fetch_all(MYSQLI_ASSOC);
          return $row;
      
    }
    public function blockcard($serviceproviderid)
    {
        $query = "SELECT DISTINCT UserId  FROM servicerequest WHERE ServiceProviderId = $serviceproviderid AND Status = 2";
        $result = mysqli_query($this->conn,$query);
        $row= $result -> fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    public function checkblocked($selectedcustomerid,$serviceproviderid)
    {
        $query = "SELECT * FROM favoriteandblocked WHERE UserId = $serviceproviderid AND TargetUserId = $selectedcustomerid";
        $result = mysqli_query($this->conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row ;
    }
    public function blockcustomer($selectedcustomerid, $serviceproviderid)
    {
        $query = "INSERT INTO favoriteandblocked( UserId, TargetUserId, IsBlocked)
                    VALUES ('$serviceproviderid', '$selectedcustomerid', 1)";
       $result= mysqli_query($this->conn,$query);
       return $result;
    }

    public function unblockcustomer($selectedcustomerid, $serviceproviderid)
    {
        $query = "DELETE FROM favoriteandblocked WHERE UserId = $serviceproviderid AND TargetUserId = $selectedcustomerid AND IsBlocked = 1";
        $result= mysqli_query($this->conn,$query);
       return $result;
    }
    
}
?>
