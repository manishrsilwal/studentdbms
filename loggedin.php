<?php
	ob_start(); //buffering for html code 
	session_start();
	

	//to check the session
	if(!isset($_SESSION['CurrentUser'])){ 
		//echo "Hello";
		 
		echo "You need to login first. Redirecting to login page............";
	
echo "<script>setTimeout(\"location.href = '/student/index.php';\");</script>";
	}

?>

