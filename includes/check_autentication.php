<?php 
	session_start();

   if(!$_SESSION["usuario"]){
      session_destroy();
      header("Location:/login.php");
      exit;
    }
?>