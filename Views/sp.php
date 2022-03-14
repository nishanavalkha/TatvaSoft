<h1> this is service provider</h1>
<?php
	 if(!isset($_SESSION))
    {
        session_start();
    }
    echo $_SESSION['UserId'];
?>