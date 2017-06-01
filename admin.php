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
		 
		 if($role=='admin')
         header("location: adminhome.php");

     	 else
     	 	echo "Wrong Exam Admin";
      }

	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
<link id="theme-style" rel="stylesheet" href="css/style.css">

<script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<style>
    @font-face{
    	font-family: "Analecta";
    	src: url(font/Analecta.otf) format("truetype");
    }
</style>
	<title>Login as Admin</title>
</head>
<body>
<div class="jumbotron"><center><font face="Analecta" size="13">ABC Madhyamik Vidhyalaya</font><br><font face="Analecta" size="10">ABC, Nepal</font></center></div>

<div class="container">
<div class="well" style="margin-top: 100px; padding-right: 2px;">
<div class="top"><center><h3>Login as Admin</h3></center></div>
<div style = "font-size:14px; color:#cc0000; margin-top:10px"><?php echo $error; ?> </div>
                        
    <form class="login" method="POST">
        <div class="form-group">
         <label for="username"><h4>Enter the Username:</h4></label>
         <input id="username" class="form-control" type="text" name="username" placeholder="Input Username" required>
        </div>

        
        <div class="form-group">
         <label for="password"><h4>Enter the Password:</h4></label>
         <input id="password"  class="form-control" type="password" name="password" placeholder="Input Password" required>
        </div>

        <button type="submit" class="center-block btn btn-primary right" value="Login">Login</button>
    </form>
</div>
</body>
</html>