<?php
		
			 	$to_email = "nishanavalkha2251@gmail.com";
			 	$subject = "Simple Email Test via PHP";
			 	$body ="hHi, THis is test email send by PHP Script";
			 	$headers ="From:nishanavalkha2251@gmail.com";
		
		 if (mail($to_email, $subject, $body, $headers)) {
		  	echo "Email send to $to_email..";
		  }
		  else{

		  	echo "email not send";
		  }


?>