<?php
   session_start();
   
   if (isset($_SESSION['CurrentUser'])) {
   		session_destroy();

   		header("Location: index.php");
   }
?>