<?php
  require 'connection.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bank');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
      $myusername = mysqli_real_escape_string($db,$_POST['lusername']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['lpassword']); 
      $sql = "SELECT * FROM bankdetails WHERE username = '$myusername' and password = '$mypassword'";
      echo $sql;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $count = mysqli_num_rows($result);
      if($count == 1) {
        $_SESSION['login_user'] = $myusername;
		    $_SESSION['fname']=$row["fname"]; 
        $_SESSION['public_key']='';
        $_SESSION['admin_public_key']=$row["publickey"];
       
		    if($myusername == "admin" || $myusername == "admin1" || $myusername == "admin3")
			           header("location: authenticate.php");
		      else
			         header("location: userfrontend.php");
          }
      else
         $error = "Your Login Name or Password is invalid";
       echo $error;
      
   }
   ?>