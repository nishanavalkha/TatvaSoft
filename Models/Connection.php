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
        $query = "SELECT * FROM servicerequest WHERE UserId = '$userid' AND  Status=2 OR Status=3";
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
   
}
?>