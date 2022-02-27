<?php
 if(!isset($_SESSION))
    {
        session_start();

    }
if(isset($_SESSION['security']))
{
?>

<h1> this is customer page</h1>
<?php

	
    if(isset($_SESSION['username']))
    {
    	echo $_SESSION['username'];
    }
}
else{
	 
	// echo '<script> alert("ple login please!"); </script>';"
		
     $base_url ="http://localhost/helperland1/Views/home.php";
		header('Location:' . $base_url);
	}
	
?>