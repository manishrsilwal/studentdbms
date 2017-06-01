<?php
   include("control.php");
   session_start();
   if(isset($_SESSION['CurrentUser']))
   {
	   session_destroy();
   }
   
   $error = NULL;
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from login
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

	  $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $start=1;
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $role=$row['role'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
	    if($count==1) {
       	 $_SESSION['CurrentUser'] = $role;
		 $_POST['role'] = $role;
         echo $_SESSION["CurrentUser"];
		 
		 if($role=='administrator')
         header("location: adminhome.php");
         	
			elseif($role=='examiner')
				header("location: examhome.php");
				
				elseif($role=='account')
					header("location: accounthome.php");
					
					else
						echo "Please define your role.";
	
        
      }

	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>