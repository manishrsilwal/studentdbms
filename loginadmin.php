<?php
ob_start(); //buffering for html code 

//to only let administrator access this page
if(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser']!== 'admin'){
		echo "You need to login as administrator. Redirecting to login page............";
	
echo "<script>setTimeout(\"location.href = 'adminhome.php';\",1500);</script>";
exit();
}
else{
	echo "You have been logged in as: ".$_SESSION["CurrentUser"];

}
?>