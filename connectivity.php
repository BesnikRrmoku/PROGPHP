<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'projektiphp');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
    function SignIn()
     { session_start(); 
     	if(!empty($_POST['user']))
       { $query = mysqli_query($GLOBALS['con'],"SELECT * FROM admini1 where UserName = '$_POST[user]' AND Password = '$_POST[pass]'") 
   or die(mysqli_error());
    $row = mysqli_fetch_array($query) or die(mysqli_error()); 
    if(!empty($row['UserName']) AND !empty($row['Password']))
     {
      $_SESSION['UserName'] = $row['Password'];
      
    include ("indexadmin.php");
     } 
     else
	 { 
	 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; }  
	 }
	 }
	 if(isset($_POST['submit']))
	 { SignIn(); 
	 }
	 
	 ?>
